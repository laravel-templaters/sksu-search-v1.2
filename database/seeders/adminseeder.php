<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
         'name'=> 'ROLANDO F. HECHANOVA, PhD',
         'birth_day'=>  Carbon::create('2000', '04', '06'),   
         'contact_number'=>'09123456789',        
         'email'=>'rhech@pres.com',
         'password'=> Hash::make('jesher123'),
         'role_id'=>2,
         'department_id'=>1,
         'position_id'=>5]);

         DB::table('users')->insert([
            'name'=> 'CHRISTINE P. ABO, PhD',
            'birth_day'=>  Carbon::create('2000', '04', '06'),   
            'contact_number'=>'09123456789',        
            'email'=>'christineabo@vicepres.com',
            'password'=> Hash::make('abo123'),
            'role_id'=>2,
            'department_id'=>6,
            'position_id'=>13]);

            DB::table('users')->insert([
               'name'=> 'JULIE E. ALBANO, PhD',
               'birth_day'=>  Carbon::create('2000', '04', '06'),   
               'contact_number'=>'09123456789',        
               'email'=>'juliealbano@vicepres.com',
               'password'=> Hash::make('albano123'),
               'role_id'=>2,
               'department_id'=>7,
               'position_id'=>13]);   

            DB::table('users')->insert([
               'name'=> 'REYNALDO H. DALAYAP, PhD',
               'birth_day'=>  Carbon::create('2000', '04', '06'),   
               'contact_number'=>'09123456789',        
               'email'=>'reynaldodalayap@vicepres.com',
               'password'=> Hash::make('dalayap123'),
               'role_id'=>2,
               'department_id'=>8,
               'position_id'=>13]);   

            DB::table('users')->insert([
               'name'=> 'LYNETTE G. PENIERO',
               'birth_day'=>  Carbon::create('2000', '04', '06'),   
               'contact_number'=>'09123456789',        
               'email'=>'lynettepeniero@vicepres.com',
               'password'=> Hash::make('peniero123'),
               'role_id'=>2,
               'department_id'=>9,
               'position_id'=>14]);

               DB::table('users')->insert([
                  'name'=> 'HELEN ESPARTERO',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'helenespartero@director.com',
                  'password'=> Hash::make('espartero123'),
                  'role_id'=>2,
                  'department_id'=>10,
                  'position_id'=>12]);               
               
               DB::table('users')->insert([
                  'name'=> 'RODELYN M. DALAYAP, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'rodelyndalayap@director.com',
                  'password'=> Hash::make('dalayap123'),
                  'role_id'=>2,
                  'department_id'=>11,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'SIONY S. BRUNIO, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'sionybrunio@director.com',
                  'password'=> Hash::make('brunio123'),
                  'role_id'=>2,
                  'department_id'=>12,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'ROSITA T. RIZALDO, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'rositarizaldo@director.com',
                  'password'=> Hash::make('rizaldo123'),
                  'role_id'=>2,
                  'department_id'=>13,
                  'position_id'=>12]);
              
               DB::table('users')->insert([
                  'name'=> 'DENNIS M. MERIALES, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'dennismeriales@director.com',
                  'password'=> Hash::make('meriales123'),
                  'role_id'=>2,
                  'department_id'=>14,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'NORAISA K. YASIN, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'noraisayasin@director.com',
                  'password'=> Hash::make('yasin123'),
                  'role_id'=>2,
                  'department_id'=>15,
                  'position_id'=>12]); 
                  
               DB::table('users')->insert([
                  'name'=> 'LANI B. ALCON, MPA',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'lanialcon@director.com',
                  'password'=> Hash::make('alcon123'),
                  'role_id'=>2,
                  'department_id'=>16,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'REBECCA D. SUBILLAGA, EdD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'rebeccasubillaga@director.com',
                  'password'=> Hash::make('subillaga123'),
                  'role_id'=>2,
                  'department_id'=>17,
                  'position_id'=>12]); 
                  
               DB::table('users')->insert([
                  'name'=> 'SUSIE D. DAZA, MS',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'susiedaza@director.com',
                  'password'=> Hash::make('daza123'),
                  'role_id'=>2,
                  'department_id'=>18,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'LEONCIO B. DULIN',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'leonciodulin@director.com',
                  'password'=> Hash::make('dulin123'),
                  'role_id'=>2,
                  'department_id'=>19,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'BENEDICT A. RABUT, DIT',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'benedictrabut@director.com',
                  'password'=> Hash::make('rabut123'),
                  'role_id'=>2,
                  'department_id'=>20,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'KRISTINE AMPAS, MIT',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'kristineampast@director.com',
                  'password'=> Hash::make('ampas123'),
                  'role_id'=>2,
                  'department_id'=>21,
                  'position_id'=>15]);
                  
               DB::table('users')->insert([
                  'name'=> 'ALNE D. QUINOVEBA, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'alnequinoveba@director.com',
                  'password'=> Hash::make('quinoveba123'),
                  'role_id'=>2,
                  'department_id'=>22,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'Lilibeth B. EDAÑO, EdD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'lilibethedano@director.com',
                  'password'=> Hash::make('edano123'),
                  'role_id'=>2,
                  'department_id'=>23,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'VIVENCIO L. CALIXTRO, JR., EdD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'vivenciocalixtro@director.com',
                  'password'=> Hash::make('calixtro123'),
                  'role_id'=>2,
                  'department_id'=>24,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'JESHER Y. PALOMARIA, CPA',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'jesherpalomaria@director.com',
                  'password'=> Hash::make('palomaria123'),
                  'role_id'=>2,
                  'department_id'=>25,
                  'position_id'=>12]);
                  
                  
               DB::table('users')->insert([
                  'name'=> 'REY S. FUENTEBILLA, MAT',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'reyfuentebilla@director.com',
                  'password'=> Hash::make('fuentebilla123'),
                  'role_id'=>2,
                  'department_id'=>26,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'ANNERILL R. LORIO, MS',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'annerilllorio@director.com',
                  'password'=> Hash::make('lorio123'),
                  'role_id'=>2,
                  'department_id'=>27,
                  'position_id'=>12]); 
                  
               DB::table('users')->insert([
                  'name'=> 'MARY JEAN S. FALSARIO, EdD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'maryjeanfalsario@director.com',
                  'password'=> Hash::make('falsario123'),
                  'role_id'=>2,
                  'department_id'=>28,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'AMIRA MAY C. GUMANOY, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'amiramaygumanoy@director.com',
                  'password'=> Hash::make('gumanoy123'),
                  'role_id'=>2,
                  'department_id'=>29,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'HASSANAL P. ABUSAMA, MS',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'hassanalabusama@director.com',
                  'password'=> Hash::make('abuasama123'),
                  'role_id'=>2,
                  'department_id'=>30,
                  'position_id'=>12]);  
                  
                DB::table('users')->insert([
                  'name'=> 'GRACE R. PEDROLA, RN',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'gracepedrola@director.com',
                  'password'=> Hash::make('pedrola123'),
                  'role_id'=>2,
                  'department_id'=>31,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'ENGR. NESTOR ALCON',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'nestoralcon@director.com',
                  'password'=> Hash::make('alcon123'),
                  'role_id'=>2,
                  'department_id'=>32,
                  'position_id'=>12]);
                  
                DB::table('users')->insert([
                  'name'=> 'CYRIL JOHN A. DOMINGO, MSc',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'cyriljohndomingo@director.com',
                  'password'=> Hash::make('domingo123'),
                  'role_id'=>2,
                  'department_id'=>33,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'MITOS D. DELCO, PhD',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'mitosdelco@director.com',
                  'password'=> Hash::make('delco123'),
                  'role_id'=>2,
                  'department_id'=>34,
                  'position_id'=>12]);
                  
               DB::table('users')->insert([
                  'name'=> 'GEMMA CONSTANTINO',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'gemmaconstantino@director.com',
                  'password'=> Hash::make('constantino123'),
                  'role_id'=>2,
                  'department_id'=>35,
                  'position_id'=>16]);
                  
               DB::table('users')->insert([
                  'name'=> 'MARITES B. JAVA',
                  'birth_day'=>  Carbon::create('2000', '04', '06'),   
                  'contact_number'=>'09123456789',        
                  'email'=>'maritesjava@director.com',
                  'password'=> Hash::make('java123'),
                  'role_id'=>2,
                  'department_id'=>36,
                  'position_id'=>12]); 
                  
                DB::table('users')->insert([
                   'name'=> 'VIOLETA T. PICO',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'violetapico@director.com',
                   'password'=> Hash::make('pico123'),
                   'role_id'=>2,
   
                   'position_id'=>17]);
                   
                  DB::table('users')->insert([
                    'name'=> 'MARISSA C. HITALIA, PhD',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'marissahitalia@dean.com',
                    'password'=> Hash::make('hitalia123'),
                    'role_id'=>2,
                    'department_id'=>37,
                    'position_id'=>18]);
                    
                  DB::table('users')->insert([
                   'name'=> 'ATTY. LEANNIE ANN C. CERDANA',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'leannieanncerdana@dean.com',
                   'password'=> Hash::make('cerdana123'),
                   'role_id'=>2,
                   'department_id'=>38,
                   'position_id'=>18]);
                   
                  DB::table('users')->insert([
                    'name'=> 'NANCY D. ESPACIO, EdD',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'nancyespacio@dean.com',
                    'password'=> Hash::make('espacio123'),
                    'role_id'=>2,
                    'department_id'=>39,
                    'position_id'=>18]); 
                    
                  DB::table('users')->insert([
                   'name'=> 'CARMELA CAMILA B. URBANO, RN, MAN',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'carmilaurbano@dean.com',
                   'password'=> Hash::make('urbano123'),
                   'role_id'=>2,
                   'department_id'=>40,
                   'position_id'=>18]);
                   
                  DB::table('users')->insert([
                    'name'=> 'EDWIN CORTEJO, MS',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'edwincortejo@dean.com',
                    'password'=> Hash::make('cortejo123'),
                    'role_id'=>2,
                    'department_id'=>41,
                    'position_id'=>18]);
                    
                  DB::table('users')->insert([
                   'name'=> 'MA. JEANELLE B. ARGONZA, PhD',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'jeanelleargonza@dean.com',
                   'password'=> Hash::make('argonza123'),
                   'role_id'=>2,
                   'department_id'=>42,
                   'position_id'=>18]);
                   
                  DB::table('users')->insert([
                    'name'=> 'JEANNIE A. ROMANO, PhD',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'jeannieromano@dean.com',
                    'password'=> Hash::make('romano123'),
                    'role_id'=>2,
                    'department_id'=>43,
                    'position_id'=>18]); 
                    
                  DB::table('users')->insert([
                   'name'=> 'CECILIA E. GENER, MIT',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'ceciliagener@dean.com',
                   'password'=> Hash::make('gener123'),
                   'role_id'=>2,
                   'department_id'=>44,
                   'position_id'=>18]); 
                   
                  DB::table('users')->insert([
                    'name'=> 'RANDE T. BERINA, MAT',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'randeberina@dean.com',
                    'password'=> Hash::make('berina123'),
                    'role_id'=>2,
                    'department_id'=>45,
                    'position_id'=>18]);
                    
                  DB::table('users')->insert([
                   'name'=> 'MEILAFLOR A. PACLIBAR, MEP-CoE',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'meilaflorpaclibar@dean.com',
                   'password'=> Hash::make('paclibar123'),
                   'role_id'=>2,
                   'department_id'=>46,
                   'position_id'=>18]);
                   
                  DB::table('users')->insert([
                    'name'=> 'EULOGIO L. APPELIDO, JR., MIT',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'eulogioappelido@chief.com',
                    'password'=> Hash::make('appelido123'),
                    'role_id'=>2,
                    'department_id'=>47,
                    'position_id'=>19]);
                    
                  DB::table('users')->insert([
                   'name'=> 'ADONIS S. BESA, PhD',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'adonisbesa@chief.com',
                   'password'=> Hash::make('besa123'),
                   'role_id'=>2,
                   'department_id'=>48,
                   'position_id'=>19]); 
                   
                  DB::table('users')->insert([
                    'name'=> 'DESIREE G. LEGASPI',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'desireelegaspi@chief.com',
                    'password'=> Hash::make('legaspi123'),
                    'role_id'=>2,
                    'department_id'=>49,
                    'position_id'=>19]);
                    
                  DB::table('users')->insert([
                   'name'=> 'LOVINA P. COGOLLO, PhD',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'lovinacogollo@chief.com',
                   'password'=> Hash::make('cogollo123'),
                   'role_id'=>2,
                   'department_id'=>50,
                   'position_id'=>15]); 
                   
                  DB::table('users')->insert([
                    'name'=> 'RIZA MAE KUSAIN',
                    'birth_day'=>  Carbon::create('2000', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'rizzamaekusain@chief.com',
                    'password'=> Hash::make('kusain123'),
                    'role_id'=>2,

                    'position_id'=>20]); 
                    
                  DB::table('users')->insert([
                   'name'=> 'TARHATA K. USMAN',
                   'birth_day'=>  Carbon::create('2000', '04', '06'),   
                   'contact_number'=>'09123456789',        
                   'email'=>'tarhatausman@chief.com',
                   'password'=> Hash::make('usman123'),
                   'role_id'=>2,
                   
                   'position_id'=>21]);    
                




                   
                //test vars
                 DB::table('users')->insert([
                    'name'=> 'Heiven C Cordero',
                    'birth_day'=>  Carbon::create('1986', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'hcc@dep.com',
                    'password'=> Hash::make('hcc123'),
                    'role_id'=>3,
                    'department_id'=>3,
                    'position_id'=>2]);

                 DB::table('users')->insert([
                    'name'=> 'Mentha C. La Palma',
                    'birth_day'=>  Carbon::create('1998', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'mclp@budget.com',
                    'password'=> Hash::make('mclp123'),
                    'role_id'=>3,
                    'department_id'=>3,
                    'position_id'=>7]);

                 DB::table('users')->insert([
                    'name'=> 'Douglas P. Canlubang',
                    'birth_day'=>  Carbon::create('1988', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'dpc@icu.com',
                    'password'=> Hash::make('dpc123'),
                    'role_id'=>3,
                    'department_id'=>3,
                    'position_id'=>11]);
                   DB::table('users')->insert([
                    'name'=> 'Dougasdfasdfasdfasdlas P. Canlubang',
                    'birth_day'=>  Carbon::create('1988', '04', '06'),   
                    'contact_number'=>'09123456789',        
                    'email'=>'roger.gatuslao.grizz@gmail.com',
                    'password'=> Hash::make('dpc123'),
                    'role_id'=>3,
                    'department_id'=>3,
                    'position_id'=>11]);
            //end test vars--
        //             DB::table('users')->insert([
        //                 'first_name'=> 'Travis',
        //                 'middle_name'=> 'T',
        //                 'last_name'=> 'Scott',
        //                 'address'=> 'Tacurong City',
        //                 'birth_day'=>  Carbon::create('2000', '02', '03'),   
        //                 'contact_number'=>'09312356688',        
        //                 'email'=>'dhead2@d.com',
        //                 'employee_number'=>'0000005',
        //                 'username'=> 'dhead2',
        //                 'password'=> Hash::make('department123'),
        //                 'role_id'=>2,
        //                 'department_id'=>3,
        //                 'position_id'=>2]);

                // DB::table('users')->insert([
        //     'first_name'=> 'Kristine Mae',
        //     'middle_name'=> 'H.',
        //     'last_name'=> 'Ampas',
        //     'address'=> 'Tacurong City',
        //     'birth_day'=>  Carbon::create('2000', '01', '01'),   
        //     'contact_number'=>'09123456789',        
        //     'email'=>'kha@admin.com',
        //     'employee_number'=>'0000001',
        //     'username'=> 'admin',
        //     'password'=> Hash::make('searchadmin0123'),
        //     'role_id'=>1,
        //     'department_id'=>1,
        //     'position_id'=>1]);

        //     DB::table('users')->insert([
        //         'first_name'=> 'Jane',
        //         'middle_name'=> 'Sec',
        //         'last_name'=> 'Sappe',
        //         'address'=> 'Tacurong City',
        //         'birth_day'=>  Carbon::create('2000', '09', '10'),   
        //         'contact_number'=>'09123456789',        
        //         'email'=>'sec@admin.com',
        //         'employee_number'=>'0000002',
        //         'username'=> 'sec',
        //         'password'=> Hash::make('sec123'),
        //         'role_id'=>3,
        //         'department_id'=>2,
        //         'position_id'=>3]); 
    }
}
