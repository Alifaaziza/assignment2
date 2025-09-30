<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about($section = null)
    {
        $content = $this->getAboutContent($section);
        
        return view('about', [
            'title' => 'About Us',
            'section' => $section,
            'content' => $content
        ]);
    }
    
    public function program($type = null)
    {
        $programs = $this->getPrograms($type);
        
        return view('program', [
            'title' => 'Our Programs',
            'type' => $type,
            'programs' => $programs
        ]);
    }
    
    private function getAboutContent($section)
    {
        $content = [
            null => "Welcome to our company! We are dedicated to providing excellent services.",
            'history' => "Founded in 2020, our company has been serving customers with passion and dedication.",
            'mission' => "Our mission is to deliver high-quality solutions that exceed customer expectations.",
            'vision' => "We envision a future where technology makes life better for everyone."
        ];
        
        return $content[$section] ?? $content[null];
    }
    
    private function getPrograms($type)
    {
        $allPrograms = [
            'bootcamp' => [
                'Public Speaking Bootcamp',
                'Leadership Bootcamp',
                'Communication Skills Bootcamp'
            ],
            'workshop' => [
                'One-day Workshop: Effective Presentation',
                'Weekend Workshop: Confident Speaking'
            ],
            'course' => [
                'Advanced Public Speaking Course',
                'Business Communication Course'
            ]
        ];
        
        if ($type && isset($allPrograms[$type])) {
            return $allPrograms[$type];
        }
        
        // Return all programs if no specific type
        return array_merge(...array_values($allPrograms));
    }
}