<?php

return [
    'app' => [
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'fas fa-cube',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_name', // unique name for field
                'label' => 'App Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'ImpactNex Connect', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'footer_text', // unique name for field
                'label' => 'Footer Text', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '<a href="https://github.com/nasirkhan/laravel-starter/" class="text-muted">Built with ♥ </a>', // default value if you want
            ],
            [
                'type' => 'checkbox', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'show_copyright', // unique name for field
                'label' => 'Show Copyright', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '1', // default value if you want
            ],
        ],
    ],
    'email' => [
        'title' => 'Email',
        'desc' => 'Email settings for app',
        'icon' => 'fas fa-envelope',

        'elements' => [
            [
                'type' => 'email', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'email', // unique name for field
                'label' => 'Email', // you know what label it is
                'rules' => 'required|email', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'info@example.com', // default value if you want
            ],
        ],

    ],
    'social' => [
        'title' => 'Social Profiles',
        'desc' => 'Link of all the online/social profiles.',
        'icon' => 'fas fa-users',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'website_url', // unique name for field
                'label' => 'Website URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://pawndelta.com', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'facebook_url', // unique name for field
                'label' => 'Facebook Page URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://abyssalblade', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'twitter_url', // unique name for field
                'label' => 'Twitter Profile URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'instagram_url', // unique name for field
                'label' => 'Instagram Account URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'youtube_url', // unique name for field
                'label' => 'Youtube Channel URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'linkedin_url', // unique name for field
                'label' => 'LinkedIn URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'whatsapp_url', // unique name for field
                'label' => 'WhatsApp URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'messenger_url', // unique name for field
                'label' => 'Messenger URL', // you know what label it is
                'rules' => 'required|nullable|max:191', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
        ],

    ],
    'meta' => [
        'title' => 'Meta ',
        'desc' => 'Application Meta Data',
        'icon' => 'fa-solid fa-earth-asia',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_site_name', // unique name for field
                'label' => 'Meta Site Name', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'ImpactNex Connect', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_description', // unique name for field
                'label' => 'Meta Description', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '"Welcome to ImpactNex Connect, where impactful stories find their voice and causes create ripples of change.
                Our platform, born from the fusion of purpose and connectivity, empowers organizations to amplify their messages and promote their noble causes with resonance across the digital expanse.
                At CauseWave Hub, we believe in the transformative power of stories, and we provide a dedicated space for organizations to publish and share compelling narratives that inspire, inform, and
                ignite change.
                As a dynamic news blog personal website, ImpactNex Connect serves as the nexus for individuals and organizations passionate about making a difference. By harnessing the potential of the internet,
                we offer a unique opportunity for causes to gain visibility and connect with a global audience. Whether its environmental advocacy, social justice, healthcare initiatives, or any worthy cause,
                ImpactNex Connect is the conduit for voices that deserve to be heard."', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_keyword', // unique name for field
                'label' => 'Meta Keyword', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Web Application, web app, Laravel, Laravel starter, Bootstrap, Admin, Template, Open Source, nasir khan saikat, nasirkhansaikat', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_image', // unique name for field
                'label' => 'Meta Image', // you know what label it is
                'rules' => 'required', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'img/default_banner.jpg', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_fb_app_id', // unique name for field
                'label' => 'Meta Facebook App Id', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '569561286532601', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_twitter_site', // unique name for field
                'label' => 'Meta Twitter Site Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '@nasirkhansaikat', // default value if you want
            ],
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'meta_twitter_creator', // unique name for field
                'label' => 'Meta Twitter Creator Account', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '@nasirkhansaikat', // default value if you want
            ],
        ],
    ],
    'analytics' => [
        'title' => 'Analytics',
        'desc' => 'Application Analytics',
        'icon' => 'fas fa-chart-line',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'google_analytics', // unique name for field
                'label' => 'Google Analytics (gtag)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'G-ABCDE12345', // default value if you want
                'help' => 'Paste the only the Measurement Id of Google Analytics stream.', // Help text for the input field.
            ],
        ],

    ],
    'custom_css' => [
        'title' => 'Custom Code',
        'desc' => 'Custom code area',
        'icon' => 'fa-solid fa-file-code',

        'elements' => [
            [
                'type' => 'textarea', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'custom_css_block', // unique name for field
                'label' => 'Custom Css Code', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
                'help' => 'Paste the code in this field.', // Help text for the input field.
                'display' => 'raw', // Help text for the input field.
            ],
        ],

    ],
];
