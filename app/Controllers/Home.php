<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard',
        ];
        return view('v_template', $data);
    }

    public function viewMap(): string
    {
        $data = [
            'judul' => 'View Map',
            'page' => 'v_view_map',
        ];
        return view('v_template', $data);
    }

    public function baseMap(): string
    {
        $data = [
            'judul' => 'Base Map',
            'page' => 'v_base_map',
        ];
        return view('v_template', $data);
    }

    public function marker(): string
    {
        $data = [
            'judul' => 'Marker',
            'page' => 'v_marker',
        ];
        return view('v_template', $data);
    }

    public function circle(): string
    {
        $data = [
            'judul' => 'Circle',
            'page' => 'v_circle',
        ];
        return view('v_template', $data);
    }

    public function polyline(): string
    {
        $data = [
            'judul' => 'Polyline',
            'page' => 'v_polyline',
        ];
        return view('v_template', $data);
    }

    public function polygon(): string
    {
        $data = [
            'judul' => 'Polygon',
            'page' => 'v_polygon',
        ];
        return view('v_template', $data);
    }

    public function geojson(): string
    {
        $data = [
            'judul' => 'GeoJSON',
            'page' => 'v_geojson',
        ];
        return view('v_template', $data);
    }

    public function getcoordinat(): string
    {
        $data = [
            'judul' => 'Get Coordinat',
            'page' => 'v_get_coordinat',
        ];
        return view('v_template', $data);
    }

    public function getcoordinat2(): string
    {
        $data = [
            'judul' => 'Get Coordinat Dalam Radius',
            'page' => 'v_get_coordinat2',
        ];
        return view('v_template', $data);
    }

    public function geolocation(): string
    {
        $data = [
            'judul' => 'Geolocation',
            'page' => 'v_geolocation',
        ];
        return view('v_template', $data);
    }

    public function rute(): string
    {
        $data = [
            'judul' => 'Rute',
            'page' => 'v_rute',
        ];
        return view('v_template', $data);
    }

    public function rute2(): string
    {
        $data = [
            'judul' => 'Rute Dari Lokasi User',
            'page' => 'v_rute2',
        ];
        return view('v_template', $data);
    }
}
