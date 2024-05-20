<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinosaurs_model extends CI_Model {

    public function get_period_info($period) {
        // Array to store period information
        $periods_data = array(
            'Triassic' => array(
                'Land Animals' => 'Archosaurs ("ruling lizards"); therapsids ("mammal-like reptiles")',
                'Marine Animals' => 'Plesiosaurs, ichthyosaurs, fish',
                'Avian Animals' => '',
                'Plant Life' => 'Cycads, ferns, Gingko-like trees, and seed plants'
            ),
            'Jurassic' => array(
                'Land Animals' => 'Dinosaurs (sauropods, therapods); Early mammals; Feathered dinosaurs',
                'Marine Animals' => 'Plesiosaurs, fish, squid, marine reptiles',
                'Avian Animals' => 'Pterosaurs; Flying insects',
                'Plant Life' => 'Ferns, conifers, cycads, club mosses, horsetail, flowering plants'
            ),
            'Cretaceous' => array(
                'Land Animals' => 'Dinosaurs (sauropods, therapods, raptors, hadrosaurs, herbivorous ceratopsians); Small, tree-dwelling mammals',
                'Marine Animals' => 'Plesiosaurs, pliosaurs, mosasaurs, sharks, fish, squid, marine reptiles',
                'Avian Animals' => 'Pterosaurs; Flying insects; Feathered birds',
                'Plant Life' => 'Huge expansion of flowering plants'
            )
            // Add more periods and their information as needed
        );

        // Check if the specified period exists in the array
        if (array_key_exists($period, $periods_data)) {
            return $periods_data[$period];
        } else {
            // Return an error message or handle appropriately
            return 'Period information not found.';
        }
    }
}