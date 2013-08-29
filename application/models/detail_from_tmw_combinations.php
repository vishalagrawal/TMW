<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail_from_tmw_combinations extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    /*
     *
     * get all the unique commodities and their top ten weights with the size of the trailer
     *
     */
    function create_weight_maximization_report()
    {
        // get all the distinct trailer cubes from the database
        $this->db->select('*');
        $this->db->from('detail_from_tmw');
        $this->db->where('current_status','APPRVD');
        $this->db->order_by('pick_up_driver','asc');
        $this->db->order_by('deliver_by','asc');
        $details_from_tmw_combinations_query = $this->db->get();

        $weight_maximation_report = array();

        foreach($details_from_tmw_combinations_query->result() as $row)
        {
            $this->db->select('*');
            $this->db->from('tractors');
            $this->db->where('tractor_number',$row->pick_up_tractor);
            $tractor_query = $this->db->get();

            if($tractor_query->num_rows() > 0)
            {
                $tractor = $tractor_query->row_array(); 
            }
            
            $this->db->select('*');
            $this->db->from('trailers_tank');
            $this->db->where('trailer_number',$row->pick_up_trailer);
            $trailer_query = $this->db->get();

            if($trailer_query->num_rows() > 0)
            {
                $trailer = $trailer_query->row_array();
            }

            $run = array (
                'pick_up_driver'        => $row->pick_up_driver,
                'deliver_date'            => $row->deliver_by,
                'trip_number'           => $row->trip_number,  
                'shipper_name'          => $row->shipper_name,
                'shipper_city'          => $row->shipper_city,
                'consignee_name'        => $row->consignee_name,
                'consignee_city'        => $row->consignee_city,
                'commodity_code'        => $row->commodity_code,
                'tractor'               => $row->pick_up_tractor,
                'tractor_type'          => $tractor['tractor_type'],
                'tractor_super_singles' => $tractor['super_singles'],
                'tractor_air_weigh'     => $tractor['air_weigh'],
                'trailer'               => $row->pick_up_trailer,
                'trailer_size'          => $trailer['trailer_size'],
                'trailer_super_singles' => $trailer['super_singles'],
                'trailer_suspension'    => $trailer['trailer_suspension'],
                'rate'                  => $row->rate,
                'driver_rate'           => $row->driver_rate,
                'weight'                => $row->weight,
                'freight_charges'       => $row->freight_charges,
                'accessorial_charges'   => $row->accessorial_charges,
                'current_status'        => $row->current_status
            );
            $weight_maximation_report[] = $run;
        } 
        return $weight_maximation_report;
    }

}

/* End of file detail_from_tmw_combinations.php */
/* Location: ./application/models/detail_from_tmw_combinations.php */