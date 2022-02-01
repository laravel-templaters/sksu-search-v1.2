<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //ACCESS CAMPUS 1
        DB::table('campuses')->insert([
            'campus_name'=> 'ACCESS',
            'campus_address'=> 'EJC Montilla, Tacurong City, 9800, Philippines',
            'campus_shortCode'=> 'ACSC',
            ]);

        //TACURONG CAMPUS 2
        DB::table('campuses')->insert([
            'campus_name'=> 'TACURONG',
            'campus_address'=> 'Pan-Philippine Highway, Tacurong City, 9800, Sultan Kudarat',
            'campus_shortCode'=> 'TACC',
            'admin_user_id'=>'175',
        ]);

          //ISULAN CAMPUS 3
          DB::table('campuses')->insert([
            'campus_name'=> 'ISULAN',
            'campus_address'=> 'Isulan, 9805, Sultan Kudarat',
            'campus_shortCode'=> 'ISUC',
            'admin_user_id'=>'264',
        ]);

          //KALAMANSIG CAMPUS 4
        DB::table('campuses')->insert([
            'campus_name'=> 'KALAMANSIG',
            'campus_address'=> 'Kalamansig, 9808, Sultan Kudarat',
            'campus_shortCode'=> 'KALC',
            'admin_user_id'=>'169',
        ]);

         //LUTAYAN CAMPUS 5
        DB::table('campuses')->insert([
            'campus_name'=> 'LUTAYAN',
            'campus_address'=> 'Blingkong, Lutayan, 9803, Sultan Kudarat',
            'campus_shortCode'=> 'LUTC',
            'admin_user_id'=>'295',
        ]);

        //PALIMBANG CAMPUS 6
        DB::table('campuses')->insert([
            'campus_name'=> 'PALIMBANG',
            'campus_address'=> 'Palimbang, 9809, Sultan Kudarat',
            'campus_shortCode'=> 'PALC',
            'admin_user_id'=>'397',
        ]);

        //BAGUMBAYAN CAMPUS 7
        DB::table('campuses')->insert([
            'campus_name'=> 'BAGUMBAYAN',
            'campus_address'=> 'Bagumbayan, 9801, Sultan Kudarat',
            'campus_shortCode'=> 'BAGC',
            'admin_user_id'=>'276',
        ]);        

 
        DB::table('departments')->insert([
            'department_name'=> 'Administration',
            'department_short_code'=>'acc-adm',
            'campus_id'=>'1',
            ]);//1
            DB::table('departments')->insert([
                'department_name'=> 'Budget Office',
                'department_short_code'=>'acc-budg',
                'campus_id'=>'1',
                'admin_user_id'=>'49',
                'head_user_id'=>'47',
                ]);//2
                DB::table('departments')->insert([
                    'department_name'=> 'Accounting Office',
                    'department_short_code'=>'acc-acto',
                    'campus_id'=>'1',
                    'admin_user_id'=>'19',
                    'head_user_id'=>'60',
                    ]);//3
                    DB::table('departments')->insert([
                    'department_name'=> 'Information and Communications Tech',
                    'department_short_code'=>'acc-ict',
                    'campus_id'=>'1',
                    ]);//4
                    DB::table('departments')->insert([
                    'department_name'=> 'Internal Control Unit',
                    'department_short_code'=>'acc-icu',
                    'campus_id'=>'1',
                    'admin_user_id'=>'45',
                    'head_user_id'=>'44',                    
                    ]);//5
                    DB::table('departments')->insert([
                        'department_name'=> 'Academic Affairs',
                        'department_short_code'=>'acc-acaf',
                        'admin_user_id'=>'1',
                        'campus_id'=>'1',
                        ]);//6
                    DB::table('departments')->insert([
                        'department_name'=> 'Research Development and Extension Services',
                        'department_short_code'=>'acc-rdes',
                        'admin_user_id'=>'2',
                        'campus_id'=>'1',
                        ]);//7
                    DB::table('departments')->insert([
                        'department_name'=> 'Finance, Administration and Resource Generation',
                        'department_short_code'=>'acc-rdes',
                        'admin_user_id'=>'50',
                        'campus_id'=>'1',
                        ]);//8 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Student Admission and Record Office',
                        'department_short_code'=>'acc-saro',
                        'admin_user_id'=>'3',
                        'campus_id'=>'1',
                        ]);//9

                    DB::table('departments')->insert([
                        'department_name'=> 'Instruction',
                        'department_short_code'=>'acc-ins',
                        'admin_user_id'=>'4',
                        'campus_id'=>'1',
                        ]);//10

                    DB::table('departments')->insert([
                        'department_name'=> 'Research Development',
                        'department_short_code'=>'acc-rd',
                        'admin_user_id'=>'5',
                        'campus_id'=>'1',
                        ]);//11 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Extension Services',
                        'department_short_code'=>'acc-es',
                        'admin_user_id'=>'6',
                        'campus_id'=>'1',
                        ]);//12
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Resource Generation',
                        'department_short_code'=>'acc-es',
                        'admin_user_id'=>'7',
                        'campus_id'=>'1',
                        ]);//13
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Planning and Development',
                        'department_short_code'=>'acc-pad',
                        'admin_user_id'=>'8',
                        'campus_id'=>'1',
                        ]);//14 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Human Resource Management and Development',
                        'department_short_code'=>'acc-hrms',
                        'admin_user_id'=>'9',
                        'campus_id'=>'1',
                        ]);//15         
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Quality Management System and Assurance',
                        'department_short_code'=>'acc-qmsa',
                        'admin_user_id'=>'10',
                        'campus_id'=>'1',
                        ]);//16
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Public Relations and Information Office',
                        'department_short_code'=>'acc-prio',
                        'admin_user_id'=>'11',
                        'campus_id'=>'1',
                        ]);//17 

                    DB::table('departments')->insert([
                        'department_name'=> 'GAD',
                        'department_short_code'=>'acc-gad',
                        'admin_user_id'=>'12',
                        'campus_id'=>'1',
                        ]);//18 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Security Services',
                        'department_short_code'=>'acc-ss',
                        'admin_user_id'=>'13',
                        'campus_id'=>'1',
                        ]);//19
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'uICT Office',
                        'department_short_code'=>'acc-uict',
                        'admin_user_id'=>'14',
                        'head_user_id'=>'370',
                        'campus_id'=>'1',
                        ]);//20 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'MIS Office',
                        'department_short_code'=>'acc-mis',
                        'admin_user_id'=>'15',
                        'campus_id'=>'1',
                        ]);//21
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Library Services and Museum',
                        'department_short_code'=>'acc-lsm',
                        'admin_user_id'=>'16',
                        'campus_id'=>'1',
                        ]);//22
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Socio-cultural Affairs',
                        'department_short_code'=>'acc-sca',
                        'admin_user_id'=>'17',
                        'campus_id'=>'1',
                        ]);//23 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Sports & Amusement Center',
                        'department_short_code'=>'acc-sac',
                        'admin_user_id'=>'18',
                        'campus_id'=>'1',
                        ]);//24
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Finance Services',
                        'department_short_code'=>'acc-fin',
                        'admin_user_id'=>'19',
                        'campus_id'=>'1',
                        ]);//25
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'NSTP',
                        'department_short_code'=>'acc-nstp',
                        'campus_id'=>'1',
                        ]);//26
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Guidance & Testing Center',
                        'department_short_code'=>'acc-gtc',
                        'admin_user_id'=>'21',
                        'campus_id'=>'1',
                        ]);//27
                        
                     DB::table('departments')->insert([
                         'department_name'=> 'Alumni Relations',
                         'department_short_code'=>'acc-ar',
                         'admin_user_id'=>'22',
                         'campus_id'=>'1',
                         ]);//28

                    DB::table('departments')->insert([
                        'department_name'=> 'Instructional Materials Development Center',
                        'department_short_code'=>'acc-imdc',
                        'admin_user_id'=>'23',
                        'campus_id'=>'1',
                        ]);//29

                    DB::table('departments')->insert([
                        'department_name'=> 'Student Affairs & Services',
                        'department_short_code'=>'acc-safs',
                        'admin_user_id'=>'24',
                        'campus_id'=>'1',
                        ]);//30
                        
                     DB::table('departments')->insert([
                        'department_name'=> 'Health Services',
                        'department_short_code'=>'acc-hs',
                        'admin_user_id'=>'25',
                        'campus_id'=>'1',
                        ]);//31
                          
                     DB::table('departments')->insert([
                        'department_name'=> 'General Services and Motorpool',
                        'department_short_code'=>'acc-gsm',
                        'admin_user_id'=>'26',
                        'campus_id'=>'1',
                        ]);//32 
                       
                    DB::table('departments')->insert([
                      'department_name'=> 'Climate Change & DRRMC',
                      'department_short_code'=>'acc-ccdrrmc',
                      'admin_user_id'=>'28',
                      'campus_id'=>'1',
                      ]);//33 
                      
                    DB::table('departments')->insert([
                      'department_name'=> 'DRRMC',
                      'department_short_code'=>'acc-drrmc',
                      'admin_user_id'=>'29',
                      'campus_id'=>'1',
                      ]);//34
                      
                     DB::table('departments')->insert([
                       'department_name'=> 'Board Review and Coaching',
                       'department_short_code'=>'acc-brc',
                       'admin_user_id'=>'30',
                       'campus_id'=>'1',
                       ]);//35

                    DB::table('departments')->insert([
                      'department_name'=> 'Graduate School',
                      'department_short_code'=>'acc-gs',
                      'admin_user_id'=>'32',
                      'campus_id'=>'1',
                      ]);//36
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Law',
                       'department_short_code'=>'acc-law',
                       'admin_user_id'=>'33',
                       'campus_id'=>'1',
                       ]);//37 
                       
                    DB::table('departments')->insert([
                     'department_name'=> 'College of Teacher Education',
                     'department_short_code'=>'acc-ted',
                     'admin_user_id'=>'34',
                     'campus_id'=>'1',
                     ]);//38
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Health Sciences',
                       'department_short_code'=>'acc-hs',
                       'admin_user_id'=>'35',
                       'campus_id'=>'1',
                       ]);//39
                       
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Criminal Justice Education',
                       'department_short_code'=>'acc-cje',
                       'admin_user_id'=>'36',
                       'campus_id'=>'1',
                       ]);//40  
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Business Administration & Hotel Management',
                       'department_short_code'=>'acc-bahm',
                       'admin_user_id'=>'37',
                       'campus_id'=>'1',
                      ]);//41 
                      
                    DB::table('departments')->insert([
                      'department_name'=> 'College of Arts and Sciences',
                      'department_short_code'=>'acc-aas',
                      'admin_user_id'=>'38',
                      'campus_id'=>'1',
                     ]);//42
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Computer Studies',
                       'department_short_code'=>'acc-cs',
                       'admin_user_id'=>'91',
                       'campus_id'=>'1',
                      ]);//43  
                      
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Industrial Technology',
                       'department_short_code'=>'acc-it',
                       'admin_user_id'=>'40',
                       'campus_id'=>'1',
                     ]);//44 
                     
                     DB::table('departments')->insert([
                       'department_name'=> 'College of Engineering',
                       'department_short_code'=>'acc-eng',
                       'admin_user_id'=>'41',
                       'campus_id'=>'1',
                       ]);//45 

                    DB::table('departments')->insert([
                       'department_name'=> 'University Accreditation',
                       'department_short_code'=>'acc-uacc',
                       'admin_user_id'=>'42',
                       'campus_id'=>'1',
                       ]);//46  


                       
                    DB::table('departments')->insert([
                       'department_name'=> 'Science Laboratory High School',
                       'department_short_code'=>'acc-slhs',
                       'admin_user_id'=>'43',
                       'campus_id'=>'1',
                       ]);//47
                      
                    DB::table('departments')->insert([
                       'department_name'=> 'Internal Audit',
                       'department_short_code'=>'acc-ia',
                       'campus_id'=>'1',
                       ]);//48 
                       
                    DB::table('departments')->insert([
                       'department_name'=> 'Supply Office',
                       'department_short_code'=>'acc-so',
                       'admin_user_id'=>'46',
                       'campus_id'=>'1',
                       ]);//49

                    DB::table('departments')->insert([
                       'department_name'=> 'Faculty',
                       'department_short_code'=>'acc-fac',
                       'campus_id'=>'1',
                       ]);//50 
                       
                    DB::table('departments')->insert([
                       'department_name'=> 'President\'s Office',
                       'department_short_code'=>'acc-presoff',
                       'campus_id'=>'1',
                        'admin_user_id'=>'64',
                        'head_user_id'=>'63',
                        ]);//51 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Cashier\'s Office',
                        'department_short_code'=>'acc-cashoff',
                        'campus_id'=>'1',
                        'admin_user_id'=>'65',
                        'head_user_id'=>'66',
                        ]);//52

                    DB::table('departments')->insert([
                        'department_name'=> 'College of Fisheries',
                        'department_short_code'=>'kal-fish',
                        'campus_id'=>'4',
                        'admin_user_id'=>'169',
                        // 'head_user_id'=>'66',
                        ]);//53
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Agri-Aqua Center',
                        'department_short_code'=>'kal-aac',
                        'campus_id'=>'4',
                        'admin_user_id'=>'169',
                            // 'head_user_id'=>'66',
                        ]);//54

                    DB::table('departments')->insert([
                        'department_name'=> 'Regional Communal Food Processing Center',
                        'department_short_code'=>'acc-rcfpc',
                        'campus_id'=>'1',
                        'admin_user_id'=>'27',
                        ]);//55
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Registrar',
                        'department_short_code'=>'acc-reg',
                        'campus_id'=>'1',
                        'admin_user_id'=>'31',
                        ]);//56

                    DB::table('departments')->insert([
                        'department_name'=> 'Registrar',
                        'department_short_code'=>'isu-reg',
                        'campus_id'=>'3',
                        'admin_user_id'=>'226',
                        ]);//57              
    }
}
