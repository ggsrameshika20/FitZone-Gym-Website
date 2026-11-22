<?php
$services = [
    'personal-training' => [
        'title' => 'Personal Training',
        'short_desc' => 'One-on-one training with certified coaches to achieve your personal fitness goals.',
        'full_desc' => 'Get customized workout routines, real-time form correction, and dedicated accountability from our certified personal trainers. Whether your goal is weight loss, muscle gain, or athletic performance, we tailor every session to your body.',
        'price' => 'LKR 15,000 / month',
        'duration' => '60 Mins / Session',
        'level' => 'All Levels',
        'image' => 'assets/images/frtsrc.jpg',
        'highlights' => ['1-on-1 Dedicated Coach', 'Customized Workout Plan', 'Weekly Progress Tracking', 'Injury Prevention Guidance']
    ],
    'group-fitness' => [
        'title' => 'Group Fitness Classes',
        'short_desc' => 'Fun and energetic workout sessions designed for all fitness levels.',
        'full_desc' => 'Experience high-energy group workouts including HIIT, Zumba, Cross-Training, and Core Blasts. Work out alongside a motivating community with pumping music and expert instructors.',
        'price' => 'LKR 8,000 / month',
        'duration' => '45 - 60 Mins / Class',
        'level' => 'Beginner to Advanced',
        'image' => 'assets/images/sndsrc.jpg',
        'highlights' => ['High-Energy Atmosphere', 'Variety of Daily Classes', 'Motivating Group Environment', 'Calorie-Burning Routines']
    ],
    'cardio-training' => [
        'title' => 'Cardio Training',
        'short_desc' => 'Boost stamina and burn calories with advanced cardio equipment and routines.',
        'full_desc' => 'Improve your cardiovascular health, endurance, and stamina using our modern treadmills, rowing machines, assault bikes, and structured endurance intervals.',
        'price' => 'LKR 7,500 / month',
        'duration' => '45 Mins / Session',
        'level' => 'All Levels',
        'image' => 'assets/images/crdsrc.jpg',
        'highlights' => ['Modern Cardio Machines', 'Heart-Rate Zone Training', 'Stamina & Endurance Boost', 'Effective Fat Loss']
    ],
    'yoga' => [
        'title' => 'Yoga',
        'short_desc' => 'Relax, stretch and improve body flexibility through guided yoga sessions.',
        'full_desc' => 'Balance your mind and body with our guided Hatha and Vinyasa yoga classes. Improve flexibility, posture, core stability, and stress relief in a calm environment.',
        'price' => 'LKR 7,000 / month',
        'duration' => '60 Mins / Session',
        'level' => 'All Levels',
        'image' => 'assets/images/ygsrc.jpg',
        'highlights' => ['Flexibility & Mobility', 'Stress & Anxiety Relief', 'Guided Breathing Techniques', 'Core Strength & Balance']
    ],
    'nutritional-guidance' => [
        'title' => 'Nutritional Guidance',
        'short_desc' => 'Customized diet plans and nutrition support to meet your fitness goals.',
        'full_desc' => 'Fitness is 70% nutrition. Our certified nutritionists create practical, Sri Lankan-friendly meal plans tailored to your calorie needs, macros, and lifestyle.',
        'price' => 'LKR 6,000 / month',
        'duration' => 'Bi-weekly Consultations',
        'level' => 'Personalized',
        'image' => 'assets/images/nrtstc.jpg',
        'highlights' => ['Custom Meal Plans', 'Macro & Calorie Breakdown', 'Body Composition Analysis', 'Supplement Advice']
    ],
    'body-transformation' => [
        'title' => 'Body Transformation Programs',
        'short_desc' => 'Special programs designed to transform your body shape and strength.',
        'full_desc' => 'An intensive 12-week structured program combining strength training, cardio conditioning, and strict nutrition tracking for dramatic, sustainable body transformation.',
        'price' => 'LKR 25,000 / 3 months',
        'duration' => '12-Week Program',
        'level' => 'Intermediate / Committed',
        'image' => 'assets/images/trnssrc.jpg',
        'highlights' => ['12-Week Structured Roadmap', 'Before & After Tracking', 'Strength + Cardio + Diet', 'Dedicated Coach Support']
    ],
    'ladies-only' => [
        'title' => 'Ladies-Only Fitness Program',
        'short_desc' => 'Safe and comfortable workout environment designed exclusively for ladies.',
        'full_desc' => 'A dedicated, private, and supportive fitness program led by female trainers focusing on toning, strength, weight management, and overall women’s wellness.',
        'price' => 'LKR 9,000 / month',
        'duration' => '60 Mins / Session',
        'level' => 'All Levels',
        'image' => 'assets/images/ledsrc.jpg',
        'highlights' => ['100% Privacy & Comfort', 'Female Certified Trainers', 'Toning & Weight Management', 'Supportive Women’s Community']
    ],
    'kids-teen' => [
        'title' => 'Kids & Teen Fitness',
        'short_desc' => 'Fun and engaging fitness activities designed for kids and teens.',
        'full_desc' => 'Build healthy habits early! Safe, age-appropriate agility, coordination, bodyweight strength, and fun sports drills for ages 8–17.',
        'price' => 'LKR 6,500 / month',
        'duration' => '45 Mins / Session',
        'level' => 'Ages 8 - 17',
        'image' => 'assets/images/kidsrc.jpg',
        'highlights' => ['Agility & Coordination', 'Safe Age-Appropriate Drills', 'Confidence & Teamwork', 'Active Lifestyle Habits']
    ]
];

$trainers = [
    1 => [
        'name' => 'John Smith',
        'role' => 'Personal & Group Trainer',
        'experience' => '8+ Years',
        'specialties' => 'Strength Training, HIIT',
        'certified' => 'NASM, ACE',
        'image' => 'assets/images/t5.jpg',
        'bio' => 'John is a senior strength and conditioning coach with over 8 years of experience transforming clients through high-intensity interval training and progressive overload.'
    ],
    2 => [
        'name' => 'David Lee',
        'role' => 'Personal Trainer',
        'experience' => '6 Years',
        'specialties' => 'Weight Loss, Muscle Building',
        'certified' => 'ISSA',
        'image' => 'assets/images/t6.jpg',
        'bio' => 'David specializes in body recomposition, sustainable fat loss, and hypertrophy programs designed for both beginners and intermediate lifters.'
    ],
    3 => [
        'name' => 'Kevin White',
        'role' => 'Cardio Specialist',
        'experience' => '7 Years',
        'specialties' => 'Cardio Fitness, Endurance Training',
        'certified' => 'ACSM',
        'image' => 'assets/images/t7.jpg',
        'bio' => 'Kevin helps athletes and everyday members boost cardiovascular stamina, endurance, and metabolic health through structured conditioning routines.'
    ],
    4 => [
        'name' => 'Mark Johnson',
        'role' => 'Nutritional Instructor',
        'experience' => '9 Years',
        'specialties' => 'Sports Nutrition, Diet Planning',
        'certified' => 'Precision Nutrition',
        'image' => 'assets/images/t8.jpg',
        'bio' => 'Mark creates practical, science-backed meal plans tailored to individual fitness goals without extreme restrictions.'
    ],
    5 => [
        'name' => 'Sarah Blake',
        'role' => 'Yoga & Flexibility Coach',
        'experience' => '5 Years',
        'specialties' => 'Yoga, Flexibility, Mindfulness',
        'certified' => 'Yoga Alliance',
        'image' => 'assets/images/t1.jpg',
        'bio' => 'Sarah guides members in improving joint mobility, posture, core balance, and mental relaxation through Hatha and Vinyasa yoga.'
    ],
    6 => [
        'name' => 'Emily Carter',
        'role' => 'Body Transformation Trainer',
        'experience' => '6+ Years',
        'specialties' => 'Body Transformation',
        'certified' => 'NASM CPT',
        'image' => 'assets/images/t2.jpg',
        'bio' => 'Emily leads our 12-week transformation programs, combining structured workouts with weekly accountability check-ins.'
    ],
    7 => [
        'name' => 'Anna Lopez',
        'role' => 'Kids & Teens Coach',
        'experience' => '4 Years',
        'specialties' => 'Kids & Teen Fitness',
        'certified' => 'Youth Fitness Specialist',
        'image' => 'assets/images/t3.jpg',
        'bio' => 'Anna designs fun, safe, and active fitness sessions that build agility, coordination, and confidence in children and teenagers.'
    ],
    8 => [
        'name' => 'Kate Wilson',
        'role' => 'Personal & Group Trainer',
        'experience' => '7 Years',
        'specialties' => 'Group Training, Functional Fitness',
        'certified' => 'ACE CPT',
        'image' => 'assets/images/t4.jpg',
        'bio' => 'Kate brings infectious energy to every group session, focusing on functional movements that make daily life stronger and easier.'
    ]
];
?>