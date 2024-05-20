<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moviemodel extends CI_Model{
    public function search_movies($genre, $title) {
        $this->db->select('title, director, genre, imdb_rating, release_year');
        if (!empty($genre)) {
            $this->db->like('genre', $genre);
        }
        if (!empty($title)) {
            $this->db->like('title', $title);
        }
        $result = $this->db->get('movies')->result_array();
    
        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    

    public function get_all_movies() {
        $query = $this->db->get('movies')->result_array();

        if (count($query) > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function get_movies_by_genre($genre) {
        $this->db->select('title, director, genre, imdb_rating, release_year');
        $this->db->like('genre', $genre);
        $result = $this->db->get('movies')->result_array();
    
        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
    
}
