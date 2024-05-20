<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Moviemodel');
        $this->load->database();
    }

    public function index(){
        $this->load->view('search_movies');
    }

    public function search() {
        $genre = $this->input->post('genre');
        $title = $this->input->post('title');
        $data['movies'] = $this->Moviemodel->search_movies($genre, $title); // Update method name
        $this->load->view('search_results', $data);
    }
    

    public function allmovies() {
        $data['movies'] = $this->Moviemodel->get_all_movies();
        $this->load->view('all_movies', $data);
    }
    public function genre($genre) { // New method to display movies by genre
        $data['movies'] = $this->Moviemodel->get_movies_by_genre($genre);
        $data['genre'] = $genre; // Pass the genre variable to the view
        $this->load->view('movies_by_genre', $data);
    }
    
    
    
}
