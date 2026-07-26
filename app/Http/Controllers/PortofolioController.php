<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function detail($id)
    {
        // Data Dummy (Nantinya bisa diganti dengan query Database, misal: Portfolio::findOrFail($id);)
        $projects = [
            1 => [
                'title' => 'Al-Khair Social Media Branding',
                'category' => 'Social Media & Visual Identity',
                'badge' => 'Figma & Illustrator',
                'client' => 'Al-Khair Indonesia',
                'date' => 'January 2024',
                'role' => 'Lead Media & Graphic Designer',
                'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A complete visual identity redesign and social media content strategy for Al-Khair Indonesia. This project aimed to strengthen the humanitarian organization\'s branding and increase public engagement in relief distribution campaigns.',
                'challenge' => 'Aligning humanitarian messaging to remain relevant, modern, and engaging for younger demographics without losing the organization\'s empathy and credibility.',
                'solution' => 'Developed a brand-new visual design system, consistent Instagram feed templates, custom iconography, and field/digital promotional materials.',
                'gallery' => [
                    'akf-1.png',
                    'akf-2.png',
                    'akf-3.png',
                    'akf-4.png',
                    'akf-5.png',
                    'akf-6.png',
                    'akf-7.png',
                    'akf-8.jpeg',
                    'akf-9.jpeg',
                    'akf-10.jpeg',
                    'akf-11.png',
                ],
                'tools' => ['Figma', 'Adobe Illustrator', 'Adobe Photoshop', 'Canva']
            ],
            2 => [
                'title' => 'UI/UX Mobile App Design',
                'category' => 'Mobile App UI/UX',
                'badge' => 'UI/UX Design',
                'client' => '-',
                'date' => '-',
                'role' => 'UI/UX Designer',
                'image' => 'https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?auto=format&fit=crop&w=1200&q=80',
                'description' => 'A personal design project created to practice and showcase my visual design and user interface skills.',
                'challenge' => 'Finding a balance between creating a clean, modern aesthetic while keeping the overall layout intuitive and easy to navigate.',
                'solution' => 'Focused on a minimal layout with clear typography, consistent spacing, and simple navigation elements.',
                'gallery' => [
                    'frame-1.png',
                    'frame-2.png',
                ],
                'tools' => ['Figma', 'Adobe Illustrator']
            ],
            // 3 => [
            //     'title' => 'HMPTI UDB National Seminar Poster',
            //     'category' => 'Event Graphic',
            //     'badge' => 'Poster & Publication',
            //     'client' => 'HMPTI UDB Surakarta',
            //     'date' => 'November 2023',
            //     'role' => 'Graphic Designer',
            //     'image' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=1200&q=80',
            //     'description' => 'Visual promotional media design for the National Seminar and Technology Workshop hosted by HMPTI at Universitas Duta Bangsa Surakarta.',
            //     'challenge' => 'Designing an eye-catching poster for students and IT professionals that effectively displays extensive speaker information without feeling cluttered.',
            //     'solution' => 'Utilized a futuristic grid layout with high-contrast color accents to highlight key details such as event dates, venue, and speaker profiles.',
            //     'gallery' => [
            //         'https://images.unsplash.com/photo-1626785774573-4b799315345d?auto=format&fit=crop&w=800&q=80'
            //     ],
            //     'tools' => ['Adobe Illustrator', 'Adobe Photoshop']
            // ]
        ];

        // Validasi: Ambil data berdasarkan id, jika tidak ada kirim null
        $project = $projects[$id] ?? null;

        return view('detailPortfolio', compact('project'));
    }

    public function FVPortfolio()
{
    $portfolios = [
        [
            'id' => 1,
            'type' => 'image',
            'title' => 'HotMeals Distribution',
            'category' => 'Emergency Earthquake Philippines',
            'subtitle' => 'Lightroom • Color Grading',
            'media_url' => 'photography/file-1.png',
            'thumbnail_url' => 'photography/file-1.png',
        ],
        // [
        //     'id' => 2,
        //     'type' => 'video',
        //     'title' => 'Documentary B-Roll',
        //     'category' => 'Cinematic Reel',
        //     'subtitle' => 'Video Motion • 4K',
        //     'media_url' => 'https://assets.mixkit.co/videos/preview/mixkit-camper-van-driving-on-a-road-41556-large.mp4',
        //     'thumbnail_url' => null,
        // ],
        [
            'id' => 3,
            'type' => 'image',
            'title' => 'Orphans Sponsorship Al-Khair',
            'category' => 'Orphans Sponsorship',
            'subtitle' => 'Lightroom • Color Grading',
            'media_url' => 'photography/file-2.png',
            'thumbnail_url' => 'photography/file-2.png',
        ],
        [
            'id' => 4,
            'type' => 'image',
            'title' => 'Waiting for a Train',
            'category' => 'Human Intererst',
            'subtitle' => 'Lightroom • Color Grading',
            'media_url' => 'photography/file-3.jpeg',
            'thumbnail_url' => 'photography/file-3.jpeg',
        ],
        [
            'id' => 5,
            'type' => 'image',
            'title' => 'New energy for school',
            'category' => 'School kit assistance',
            'subtitle' => 'Real Pic From Camera',
            'media_url' => 'photography/file-4.jpg',
            'thumbnail_url' => 'photography/file-4.jpg',
        ],
        [
            'id' => 6,
            'type' => 'image',
            'title' => 'Emergency Food Supplies',
            'category' => 'Emergency Flash Flood Aceh',
            'subtitle' => 'Real Pic From Camera',
            'media_url' => 'photography/file-5.jpeg',
            'thumbnail_url' => 'photography/file-5.jpeg',
        ],
        [
            'id' => 7,
            'type' => 'image',
            'title' => 'Hygiene Kits Supplies',
            'category' => 'Emergency Flash Flood Aceh',
            'subtitle' => 'Real Pic From Camera',
            'media_url' => 'photography/file-6.jpeg',
            'thumbnail_url' => 'photography/file-6.jpeg',
        ],
        [
            'id' => 8,
            'type' => 'image',
            'title' => 'HotMeals Distribution',
            'category' => 'Emergency Flash Flood Aceh',
            'subtitle' => 'Lightroom • Color Grading',
            'media_url' => 'photography/file-7.jpeg',
            'thumbnail_url' => 'photography/file-7.jpeg',
        ],
        [
            'id' => 9,
            'type' => 'image',
            'title' => 'Joyful moments with the children',
            'category' => 'Orphans & Dhuafa Sponsorship',
            'subtitle' => 'Lightroom • Color Grading',
            'media_url' => 'photography/file-11.jpeg',
            'thumbnail_url' => 'photography/file-11.jpeg',
        ],
        [
            'id' => 10,
            'type' => 'image',
            'title' => 'Sharing happiness with those in need',
            'category' => 'Monthly Food Pack Distribution',
            'subtitle' => 'Lightroom • Color Grading',
            'media_url' => 'photography/file-20.jpeg',
            'thumbnail_url' => 'photography/file-20.jpeg',
        ],
    ];

    
    return view('welcome', compact('portfolios'));
}
}
