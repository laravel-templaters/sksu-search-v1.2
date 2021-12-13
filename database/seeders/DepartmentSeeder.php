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
        //ACCESS CAMPUS
        DB::table('campuses')->insert([
            'campus_name'=> 'ACCESS',
            'campus_address'=> 'EJC Montilla, Tacurong City, 9800, Philippines',
            'campus_shortCode'=> 'ACSC',
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
                'admin_user'=>'50',
                'head_user'=>'47',
                ]);//2
                DB::table('departments')->insert([
                    'department_name'=> 'Accounting Office',
                    'department_short_code'=>'acc-acto',
                    'campus_id'=>'1',
                    'admin_user'=>'19',
                    'head_user'=>'60',
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
                    'admin_user'=>'45',
                    'head_user'=>'44',                    
                    ]);//5
                    DB::table('departments')->insert([
                        'department_name'=> 'Academic Affairs',
                        'department_short_code'=>'acc-acaf',
                        'campus_id'=>'1',
                        ]);//6
                    DB::table('departments')->insert([
                        'department_name'=> 'Research Development and Extension Services',
                        'department_short_code'=>'acc-rdes',
                        'campus_id'=>'1',
                        ]);//7
                    DB::table('departments')->insert([
                        'department_name'=> 'Finance, Administration and Resource Generation',
                        'department_short_code'=>'acc-rdes',
                        'campus_id'=>'1',
                        ]);//8 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Student Admission and Records Office',
                        'department_short_code'=>'acc-saro',
                        'campus_id'=>'1',
                        ]);//9

                    DB::table('departments')->insert([
                        'department_name'=> 'Instruction',
                        'department_short_code'=>'acc-ins',
                        'campus_id'=>'1',
                        ]);//10

                    DB::table('departments')->insert([
                        'department_name'=> 'Research Development',
                        'department_short_code'=>'acc-rd',
                        'campus_id'=>'1',
                        ]);//11 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Extension Services',
                        'department_short_code'=>'acc-es',
                        'campus_id'=>'1',
                        ]);//12
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Resource Generation',
                        'department_short_code'=>'acc-es',
                        'campus_id'=>'1',
                        ]);//13
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Planning and Development',
                        'department_short_code'=>'acc-pad',
                        'campus_id'=>'1',
                        ]);//14 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Human Resource Management and Development',
                        'department_short_code'=>'acc-hrms',
                        'campus_id'=>'1',
                        ]);//15         
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Quality Management System and Assurance',
                        'department_short_code'=>'acc-qmsa',
                        'campus_id'=>'1',
                        ]);//16
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Public Relations and Information Office',
                        'department_short_code'=>'acc-prio',
                        'campus_id'=>'1',
                        ]);//17 

                    DB::table('departments')->insert([
                        'department_name'=> 'GAD',
                        'department_short_code'=>'acc-gad',
                        'campus_id'=>'1',
                        ]);//18 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Security Services',
                        'department_short_code'=>'acc-ss',
                        'campus_id'=>'1',
                        ]);//19
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'UICT Office',
                        'department_short_code'=>'acc-uict',
                        'campus_id'=>'1',
                        ]);//20 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'MIS Office',
                        'department_short_code'=>'acc-mis',
                        'campus_id'=>'1',
                        ]);//21
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Library Services and Museum',
                        'department_short_code'=>'acc-lsm',
                        'campus_id'=>'1',
                        ]);//22
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Socio-cultural Affairs',
                        'department_short_code'=>'acc-sca',
                        'campus_id'=>'1',
                        ]);//23 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Sports & Amusement Center',
                        'department_short_code'=>'acc-sac',
                        'campus_id'=>'1',
                        ]);//24
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Finance Services',
                        'department_short_code'=>'acc-fin',
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
                        'campus_id'=>'1',
                        ]);//27
                        
                     DB::table('departments')->insert([
                         'department_name'=> 'Alumni Relations',
                         'department_short_code'=>'acc-ar',
                         'campus_id'=>'1',
                         ]);//28

                    DB::table('departments')->insert([
                        'department_name'=> 'Instructional Materials Development Center',
                        'department_short_code'=>'acc-imdc',
                        'campus_id'=>'1',
                        ]);//29

                    DB::table('departments')->insert([
                        'department_name'=> 'Student Affairs & Services',
                        'department_short_code'=>'acc-safs',
                        'campus_id'=>'1',
                        ]);//30
                        
                     DB::table('departments')->insert([
                        'department_name'=> 'Health Services',
                        'department_short_code'=>'acc-hs',
                        'campus_id'=>'1',
                        ]);//31
                          
                     DB::table('departments')->insert([
                        'department_name'=> 'General Services and Motorpool',
                        'department_short_code'=>'acc-gsm',
                        'campus_id'=>'1',
                        ]);//32 
                       
                    DB::table('departments')->insert([
                      'department_name'=> 'Climate Change & DRRMC',
                      'department_short_code'=>'acc-ccdrrmc',
                      'campus_id'=>'1',
                      ]);//33 
                      
                    DB::table('departments')->insert([
                      'department_name'=> 'DRRMC',
                      'department_short_code'=>'acc-drrmc',
                      'campus_id'=>'1',
                      ]);//34
                      
                     DB::table('departments')->insert([
                       'department_name'=> 'Board Review and Coaching',
                       'department_short_code'=>'acc-brc',
                       'campus_id'=>'1',
                       ]);//35

                    DB::table('departments')->insert([
                      'department_name'=> 'College of Graduate School',
                      'department_short_code'=>'acc-cgs',
                      'campus_id'=>'1',
                      ]);//36
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Law',
                       'department_short_code'=>'acc-law',
                       'campus_id'=>'1',
                       ]);//37 
                       
                    DB::table('departments')->insert([
                     'department_name'=> 'College of Teacher Education',
                     'department_short_code'=>'acc-ted',
                     'campus_id'=>'1',
                     ]);//38
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Health Sciences',
                       'department_short_code'=>'acc-hs',
                       'campus_id'=>'1',
                       ]);//39
                       
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Criminal Justice Education',
                       'department_short_code'=>'acc-cje',
                       'campus_id'=>'1',
                       ]);//40  
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Business Administration & Hotel Management',
                       'department_short_code'=>'acc-bahm',
                       'campus_id'=>'1',
                      ]);//41 
                      
                    DB::table('departments')->insert([
                      'department_name'=> 'College of Arts and Sciences',
                      'department_short_code'=>'acc-aas',
                      'campus_id'=>'1',
                     ]);//42
                     
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Computer Studies',
                       'department_short_code'=>'acc-cs',
                       'campus_id'=>'1',
                      ]);//43  
                      
                    DB::table('departments')->insert([
                       'department_name'=> 'College of Industrial Technology',
                       'department_short_code'=>'acc-it',
                       'campus_id'=>'1',
                     ]);//44 
                     
                     DB::table('departments')->insert([
                       'department_name'=> 'College of Engineering',
                       'department_short_code'=>'acc-eng',
                       'campus_id'=>'1',
                       ]);//45 

                    DB::table('departments')->insert([
                       'department_name'=> 'University Accreditation',
                       'department_short_code'=>'acc-uacc',
                       'campus_id'=>'1',
                       ]);//46  


                       
                    DB::table('departments')->insert([
                       'department_name'=> 'Science Laboratory High School',
                       'department_short_code'=>'acc-slhs',
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
                        'admin_user'=>'64',
                        'head_user'=>'63',
                        ]);//51 
                        
                    DB::table('departments')->insert([
                        'department_name'=> 'Cashier\'s Office',
                        'department_short_code'=>'acc-cashoff',
                        'campus_id'=>'1',
                        'admin_user'=>'65',
                        'head_user'=>'66',
                        ]);//52         
    }
}
