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
         'name' => 'CHRISTINE P. ABO, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'christineabo@sksu.edu.ph',
         'password' => Hash::make('abo123'),
         'role_id' => 2,
         'department_id' => 6,
         'position_id' => 13
      ]);

      DB::table('users')->insert([
         'name' => 'JULIE E. ALBANO, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'juliealbano@sksu.edu.ph',
         'password' => Hash::make('albano123'),
         'role_id' => 2,
         'department_id' => 7,
         'position_id' => 13
      ]);

      DB::table('users')->insert([
         'name' => 'LYNETTE G. PENIERO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lynettepeniero@sksu.edu.ph',
         'password' => Hash::make('peniero123'),
         'role_id' => 2,
         'department_id' => 9,
         'position_id' => 14
      ]);

      DB::table('users')->insert([
         'name' => 'HELEN M. ESPARTERO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'helenespartero@sksu.edu.ph',
         'password' => Hash::make('espartero123'),
         'role_id' => 2,
         'department_id' => 10,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'RODELYN M. DALAYAP, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rodelyndalayap@sksu.edu.ph',
         'password' => Hash::make('dalayap123'),
         'role_id' => 2,
         'department_id' => 11,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'SIONY S. BRUNIO, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'sionybrunio@sksu.edu.ph',
         'password' => Hash::make('brunio123'),
         'role_id' => 2,
         'department_id' => 12,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'ROSITA T. RIZALDO, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rositarizaldo@sksu.edu.ph',
         'password' => Hash::make('rizaldo123'),
         'role_id' => 2,
         'department_id' => 13,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'DENNIS M. MERIALES, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dennismeriales@sksu.edu.ph',
         'password' => Hash::make('meriales123'),
         'role_id' => 2,
         'department_id' => 14,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'NORAISA K. YASIN, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'noraisayasin@sksu.edu.ph',
         'password' => Hash::make('yasin123'),
         'role_id' => 2,
         'department_id' => 15,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'LANI B. ALCON, MPA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lanialcon@sksu.edu.ph',
         'password' => Hash::make('alcon123'),
         'role_id' => 2,
         'department_id' => 16,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'REBECCA D. SUBILLAGA, EdD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rebeccasubillaga@sksu.edu.ph',
         'password' => Hash::make('subillaga123'),
         'role_id' => 2,
         'department_id' => 17,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'SUSIE D. DAZA, MS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'susiedaza@sksu.edu.ph',
         'password' => Hash::make('daza123'),
         'role_id' => 2,
         'department_id' => 18,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'LEONCIO B. DULIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leonciodulin@sksu.edu.ph',
         'password' => Hash::make('dulin123'),
         'role_id' => 2,
         'department_id' => 19,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'BENEDICT A. RABUT, DIT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'benedictrabut@sksu.edu.ph',
         'password' => Hash::make('rabut123'),
         'role_id' => 2,
         'department_id' => 20,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'KRISTINE MAE H. AMPAS, MIT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'kristinemaeampas@sksu.edu.ph',
         'password' => Hash::make('ampas123'),
         'role_id' => 2,
         'department_id' => 21,
         'position_id' => 15
      ]);

      DB::table('users')->insert([
         'name' => 'ALNE D. QUINOVEBA, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'alnequinoveba@sksu.edu.ph',
         'password' => Hash::make('quinoveba123'),
         'role_id' => 2,
         'department_id' => 22,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'Lilibeth B. EDAÑO, EdD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lilibethedano@sksu.edu.ph',
         'password' => Hash::make('edano123'),
         'role_id' => 2,
         'department_id' => 23,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'VIVENCIO L. CALIXTRO, JR., EdD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'vivenciocalixtro@sksu.edu.ph',
         'password' => Hash::make('calixtro123'),
         'role_id' => 2,
         'department_id' => 24,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'JESHER Y. PALOMARIA, CPA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jesherpalomaria@sksu.edu.ph',
         'password' => Hash::make('palomaria123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 4
      ]);


      DB::table('users')->insert([
         'name' => 'REY S. FUENTEBILLA, MAT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reyfuentebilla@sksu.edu.ph',
         'password' => Hash::make('fuentebilla123'),
         'role_id' => 2,
         'department_id' => 26,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'ANNERILL R. LORIO, MS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'annerilllorio@sksu.edu.ph',
         'password' => Hash::make('lorio123'),
         'role_id' => 2,
         'department_id' => 27,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'MARY JEAN S. FALSARIO, EdD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maryjeanfalsario@sksu.edu.ph',
         'password' => Hash::make('falsario123'),
         'role_id' => 2,
         'department_id' => 28,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'AMIRA MAE C. GUMANOY, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'amiramaegumanoy@sksu.edu.ph',
         'password' => Hash::make('gumanoy123'),
         'role_id' => 2,
         'department_id' => 29,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'HASSANAL P. ABUSAMA, MS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'hassanalabusama@sksu.edu.ph',
         'password' => Hash::make('abusama123'),
         'role_id' => 2,
         'department_id' => 30,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'GRACE R. PEDROLA, RN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gracepedrola@sksu.edu.ph',
         'password' => Hash::make('pedrola123'),
         'role_id' => 2,
         'department_id' => 31,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'ENGR. NESTOR ALCON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nestoralcon@sksu.edu.ph',
         'password' => Hash::make('alcon123'),
         'role_id' => 2,
         'department_id' => 32,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'CYRIL JOHN A. DOMINGO, MSc',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cyriljohndomingo@sksu.edu.ph',
         'password' => Hash::make('domingo123'),
         'role_id' => 2,
         'department_id' => 33,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'MITOS D. DELCO, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mitosdelco@sksu.edu.ph',
         'password' => Hash::make('delco123'),
         'role_id' => 2,
         'department_id' => 33,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'GEMMA CONSTANTINO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gemmaconstantino@sksu.edu.ph',
         'password' => Hash::make('constantino123'),
         'role_id' => 2,
         'department_id' => 34,
         'position_id' => 16
      ]);

      DB::table('users')->insert([
         'name' => 'MARITES B. JAVA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maritesjava@sksu.edu.ph',
         'password' => Hash::make('java123'),
         'role_id' => 2,
         'department_id' => 35,
         'position_id' => 12
      ]);

      DB::table('users')->insert([
         'name' => 'VIOLETA T. PICO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'violetapico@sksu.edu.ph',
         'password' => Hash::make('pico123'),
         'role_id' => 2,

         'position_id' => 17
      ]);

      DB::table('users')->insert([
         'name' => 'MARISSA C. HITALIA, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marissahitalia@sksu.edu.ph',
         'password' => Hash::make('hitalia123'),
         'role_id' => 2,
         'department_id' => 36,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'ATTY. LEANNIE ANN C. CERDANA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lennieanncerdana@sksu.edu.ph',
         'password' => Hash::make('cerdana123'),
         'role_id' => 2,
         'department_id' => 37,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'NANCY D. ESPACIO, EdD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nancyespacio@sksu.edu.ph',
         'password' => Hash::make('espacio123'),
         'role_id' => 2,
         'department_id' => 38,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'CARMELA CAMILA B. URBANO, RN, MAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'carmelacamilaurbano@sksu.edu.ph',
         'password' => Hash::make('urbano123'),
         'role_id' => 2,
         'department_id' => 39,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'EDWIN CORTEJO, MS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'edwincortejo@sksu.edu.ph',
         'password' => Hash::make('cortejo123'),
         'role_id' => 2,
         'department_id' => 40,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'MA. JEANELLE B. ARGONZA, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'majeanelleargonza@sksu.edu.ph',
         'password' => Hash::make('argonza123'),
         'role_id' => 2,
         'department_id' => 41,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'JEANNIE A. ROMANO, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jeannieromano@sksu.edu.ph',
         'password' => Hash::make('romano123'),
         'role_id' => 2,
         'department_id' => 42,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'CECILIA E. GENER, MIT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ceciliagener@sksu.edu.ph',
         'password' => Hash::make('gener123'),
         'role_id' => 2,
         'department_id' => 43,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'RANDY T. BERINA, MAT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'randyberina@sksu.edu.ph',
         'password' => Hash::make('berina123'),
         'role_id' => 2,
         'department_id' => 44,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'MEILAFLOR A. PACLIBAR, MEP-CoE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'meilaflorpaclibar@sksu.edu.ph',
         'password' => Hash::make('paclibar123'),
         'role_id' => 2,
         'department_id' => 45,
         'position_id' => 18
      ]);

      DB::table('users')->insert([
         'name' => 'EULOGIO L. APELLIDO, JR., MIT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'eulogioapellido@sksu.edu.ph',
         'password' => Hash::make('apellido123'),
         'role_id' => 2,
         'department_id' => 46,
         'position_id' => 19
      ]);

      DB::table('users')->insert([
         'name' => 'ADONIS S. BESA, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'adonisbesa@sksu.edu.ph',
         'password' => Hash::make('besa123'),
         'role_id' => 2,
         'department_id' => 47,
         'position_id' => 19
      ]);

      DB::table('users')->insert([
         'name' => 'DESIREE G. LEGASPI',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'desireelegaspi@sksu.edu.ph',
         'password' => Hash::make('legaspi123'),
         'role_id' => 2,
         'department_id' => 5,
         'position_id' => 11
      ]);

      
      DB::table('users')->insert([
         'name' => 'REGINA L. LACAMENTO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reginalacamento@sksu.edu.ph',
         'password' => Hash::make('lacamento123'),
         'role_id' => 2,
         'department_id' => 5,
         'position_id' => 11
      ]);

      DB::table('users')->insert([
         'name' => 'LOVINA P. COGOLLO, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lovinacogollo@sksu.edu.ph',
         'password' => Hash::make('cogollo123'),
         'role_id' => 2,
         'department_id' => 49,
         'position_id' => 15
      ]);

      DB::table('users')->insert([
         'name' => 'JAY BADILLA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jaybadilla@sksu.edu.ph',
         'password' => Hash::make('badilla123'),
         'role_id' => 5,
         'department_id' => 2,
         'position_id' => 20
      ]);

      DB::table('users')->insert([
         'name' => 'JEREMY ORIANA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jeremyoriana@sksu.edu.ph',
         'password' => Hash::make('oriana123'),
         'role_id' => 5,
         'department_id' => 2,
         'position_id' => 20
      ]);
      
      DB::table('users')->insert([
         'name' => 'REIZZA MAE D. KUSAIN	',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reizzamaekusain@sksu.edu.ph',
         'password' => Hash::make('kusain123'),
         'role_id' => 5,
         'department_id' => 2,
         'position_id' => 20
      ]);

      DB::table('users')->insert([
         'name' => 'REYNALDO H. DALAYAP JR., PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reynaldodalayap@sksu.edu.ph',
         'password' => Hash::make('dalayap123'),
         'role_id' => 5,
         'department_id' => 2,
         'position_id' => 20
      ]);

      DB::table('users')->insert([
         'name' => 'KAYE ANN B. ACAYLAR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'kayeannacaylar@sksu.edu.ph',
         'password' => Hash::make('acaylar123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      DB::table('users')->insert([
         'name' => 'MARILOU TORRECAMPO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mariloutorrecampo@sksu.edu.ph',
         'password' => Hash::make('torrecampo123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      DB::table('users')->insert([
         'name' => 'CATHERINE LEGASPI',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'catherinelegaspi@sksu.edu.ph',
         'password' => Hash::make('legaspi123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      
      DB::table('users')->insert([
         'name' => 'LAPUZ MAMALO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lapuzmamalo@sksu.edu.ph',
         'password' => Hash::make('mamalo123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      DB::table('users')->insert([
         'name' => 'ARMIE JANOTO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'armiejanoto@sksu.edu.ph',
         'password' => Hash::make('janoto123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      DB::table('users')->insert([
         'name' => 'KIMBERLY PANTINOPLE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'kimberlypantinople@sksu.edu.ph',
         'password' => Hash::make('pantinople123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      
      DB::table('users')->insert([
         'name' => 'NICOLE MAGANTE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nicolemagante@sksu.edu.ph',
         'password' => Hash::make('magante123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      DB::table('users')->insert([
         'name' => 'JASON DAVE TEMBLIQUE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jasondavetemblique@sksu.edu.ph',
         'password' => Hash::make('temblique123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      DB::table('users')->insert([
         'name' => 'FRETCHIE MAE BEDUA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'fretchiemaebedua@sksu.edu.ph',
         'password' => Hash::make('bedua123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);

      
      DB::table('users')->insert([
         'name' => 'JOHN REI DELA CRUZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'johnreidelacruz@sksu.edu.ph',
         'password' => Hash::make('delacruz123'),
         'role_id' => 4,
         'department_id' => 3,
         'position_id' => 22
      ]);


      //President's Office
      DB::table('users')->insert([
         'name' => 'ROSELEN P. DADOR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'roselendador@sksu.edu.ph',
         'password' => Hash::make('dador123'),
         'role_id' => 2,
         'department_id' => 51,
         'position_id' => 23
      ]);
    
      DB::table('users')->insert([
         'name' => 'ESTHER S. LANCETA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'estherlanceta@sksu.edu.ph',
         'password' => Hash::make('lanceta123'),
         'role_id' => 2,
         'department_id' => 51,
         'position_id' => 23
      ]);
            
      DB::table('users')->insert([
         'name' => 'IRISH MAE PASQUIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'irishmaepasquin@sksu.edu.ph',
         'password' => Hash::make('pasquin123'),
         'role_id' => 2,
         'department_id' => 51,
         'position_id' => 23
      ]);

      DB::table('users')->insert([
         'name' => 'ROLANDO F. HECHANOVA, PhD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rolandohechanova@sksu.edu.ph',
         'password' => Hash::make('hechanova123'),
         'role_id' => 2,
         'department_id' => 51,
         'position_id' => 5
      ]);

      //Cashier's Office
      DB::table('users')->insert([
         'name' => 'TARHATA K. USMAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'tarhatausman@sksu.edu.ph',
         'password' => Hash::make('usman123'),
         'role_id' => 2,
         'department_id' => 52,
         'position_id' => 21
      ]);
      
      DB::table('users')->insert([
         'name' => 'VIVIAN R. LANCETA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'vivianlanceta@sksu.edu.ph',
         'password' => Hash::make('lanceta123'),
         'role_id' => 2,
         'department_id' => 52,
         'position_id' => 21
      ]);

      DB::table('users')->insert([
         'name' => 'JACQUELIN BRINGUELO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jacquelinbringuelo@sksu.edu.ph',
         'password' => Hash::make('bringuelo123'),
         'role_id' => 2,
         'department_id' => 52,
         'position_id' => 21
      ]);



      //FACULTIES
      DB::table('users')->insert([
         'name' => 'DENNIS B. ABANALES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dennisabanales@sksu.edu.ph',
         'password' => Hash::make('abanales123'),
         'role_id' => 3,
         'position_id' => 9,
         'department_id'=> 50,
      ]);

      DB::table('users')->insert([
         'name' => 'NASARUDIN I. ABAS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nasarudinabas@sksu.edu.ph',
         'password' => Hash::make('abas123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50,
      ]);

      DB::table('users')->insert([
         'name' => 'JEEB T. ABELITO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jeebabelito@sksu.edu.ph',
         'password' => Hash::make('abelito123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SHAREN JILL M. ABELLAR	',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'sharenjillabellar@sksu.edu.ph',
         'password' => Hash::make('abellar123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ABRAHAM S. ACCAD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'abrahamaccad@sksu.edu.ph',
         'password' => Hash::make('accad123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);


      DB::table('users')->insert([
         'name' => 'MILDRED F. ACCAD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mildredaccad@sksu.edu.ph',
         'password' => Hash::make('accad123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'HIPOLITO E. ACUZAR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'hipolitoacuzar@sksu.edu.ph',
         'password' => Hash::make('acuzar123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NORAINA M. AGUIL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'norainaaguil@sksu.edu.ph',
         'password' => Hash::make('aguil123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CRIZJALE V. AHMAD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'crizjaleahmad@sksu.edu.ph',
         'password' => Hash::make('ahmad123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SAIDEN P. AKMAD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'saidenakmad@sksu.edu.ph',
         'password' => Hash::make('akmad123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MICHELLE C. ALBARAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'michellealbaran@sksu.edu.ph',
         'password' => Hash::make('albaran123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARK ANTHONY G. ALCANTARA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'markanthonyalcantara@sksu.edu.ph',
         'password' => Hash::make('alcantara123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'BATUTI M. ALI',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'batutiali@sksu.edu.ph',
         'password' => Hash::make('ali123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARIANO S. ALIMAJEN JR.',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marianoalimajen@sksu.edu.ph',
         'password' => Hash::make('alimajen123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MERLY M. ALIMAJEN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'merlyalimajen@sksu.edu.ph',
         'password' => Hash::make('alimajen123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GRACELYN C. ALTAYA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gracelynaltaya@sksu.edu.ph',
         'password' => Hash::make('altaya123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CRISTOBAL M. AMBAYON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cristobalambayon@sksu.edu.ph',
         'password' => Hash::make('ambayon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARICEL L. AMIT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maricelamit@sksu.edu.ph',
         'password' => Hash::make('amit123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'AURELIO E. AMPO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'aurelioampo@sksu.edu.ph',
         'password' => Hash::make('ampo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'KEIVEN MARK B. AMPODE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'keivenmarkampode@sksu.edu.ph',
         'password' => Hash::make('ampode123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROSELYN G. ANDAMON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'roselynandamon@sksu.edu.ph',
         'password' => Hash::make('andamon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALMIRA C. ANGKAL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'almiraangkal@sksu.edu.ph',
         'password' => Hash::make('angkal123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CRESENCIO P. ANTONIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cresencioantonio@sksu.edu.ph',
         'password' => Hash::make('antonio123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ELBREN O. ANTONIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'elbrenantonio@sksu.edu.ph',
         'password' => Hash::make('antonio123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'HENRISA P. APARIS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'henrisaaparis@sksu.edu.ph',
         'password' => Hash::make('aparis123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALEXIS D. APRESTO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'alexisapresto@sksu.edu.ph',
         'password' => Hash::make('apresto123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ZIUS D. APRESTO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ziusapresto@sksu.edu.ph',
         'password' => Hash::make('apresto123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'REYNALDO B. ARANEGO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reynaldoaranego@sksu.edu.ph',
         'password' => Hash::make('aranego123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RAMIL M. ARCIOSA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ramilarciosa@sksu.edu.ph',
         'password' => Hash::make('arciosa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JUDE MICHAEL L. ARELLANO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'judemichaelarellano@sksu.edu.ph',
         'password' => Hash::make('arellano123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JAY MARK F. ARENDAIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jaymarkarendain@sksu.edu.ph',
         'password' => Hash::make('arendain123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'AMY A. ARMADA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'amyarmada@sksu.edu.ph',
         'password' => Hash::make('armada123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MICHAEL C. ARRIVAS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'michaelarrivas@sksu.edu.ph',
         'password' => Hash::make('arrivas123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LEE B. ASTROLOGO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leeastrologo@sksu.edu.ph',
         'password' => Hash::make('astrologo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JUDITH V. ASTURIAS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'judithasturias@sksu.edu.ph',
         'password' => Hash::make('asturias123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'WILFREDO M. ATAYAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'wilfredoatayan@sksu.edu.ph',
         'password' => Hash::make('atayan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOSELYN H. BACERA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joselynbacera@sksu.edu.ph',
         'password' => Hash::make('bacera123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MAILYNE V. BACONGCO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mailynebacongco@sksu.edu.ph',
         'password' => Hash::make('bacongco123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ESNEHARA P. BAGUNDANG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'esneharabagundang@sksu.edu.ph',
         'password' => Hash::make('bagundang123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RAUL H. BALACUIT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'raulbalacuit@sksu.edu.ph',
         'password' => Hash::make('balacuit123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NOR-EN E. BANGKULIT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'norenbangkulit@sksu.edu.ph',
         'password' => Hash::make('bangkulit123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARLON D. BANGONON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marlonbangonon@sksu.edu.ph',
         'password' => Hash::make('bangonon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NASSER M. BANTUGAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nasserbantugan@sksu.edu.ph',
         'password' => Hash::make('bantugan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NOEL H. BARAQUIA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'noelbaraquia@sksu.edu.ph',
         'password' => Hash::make('baraquia123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROSALIE S. BARROQUILLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rosaliebarroquillo@sksu.edu.ph',
         'password' => Hash::make('barroquillo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ELIZABETH S. BAUZON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'elizabethbauzon@sksu.edu.ph',
         'password' => Hash::make('bauzon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'R-NEL R. BELGIRA	',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rnelbelgira@sksu.edu.ph',
         'password' => Hash::make('belgira123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MICHAEL JOHN D. BENAVIDEZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'michaeljohnbenavidez@sksu.edu.ph',
         'password' => Hash::make('benavides123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DAYANARA P. BESA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dayanarabesa@sksu.edu.ph',
         'password' => Hash::make('besa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CANDELLEN P. BIADOMA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'candellenbiadoma@sksu.edu.ph',
         'password' => Hash::make('biadoma123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANTONIO G. BIBAT JR.',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'antoniobibat@sksu.edu.ph',
         'password' => Hash::make('bibat123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'FRELIN R. BINAG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'frelinbinag@sksu.edu.ph',
         'password' => Hash::make('binag123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'IRENE A. BINAG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'irenebinag@sksu.edu.ph',
         'password' => Hash::make('binag123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOEL P. BINAG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joelbinag@sksu.edu.ph',
         'password' => Hash::make('binag123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOSE VIRSON P. BINAG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'josevirsonbinag@sksu.edu.ph',
         'password' => Hash::make('binag123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHRISTOPHER B. BLASURCA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'christopherblasurca@sksu.edu.ph',
         'password' => Hash::make('blasurcha123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHRISTIAN JOHN T. BOGLOSA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'christianjohnboglosa@sksu.edu.ph',
         'password' => Hash::make('boglosa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALMIRA A. BONIEL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'almiraboniel@sksu.edu.ph',
         'password' => Hash::make('boniel123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SANDRA B. BONRUSTRO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'sandrabonrustro@sksu.edu.ph',
         'password' => Hash::make('bonrusto123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ELMER C. BUENAVIDES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'elmerbuenavides@sksu.edu.ph',
         'password' => Hash::make('buenavides123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JADE C. BUENAVIDES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jadebuenavides@sksu.edu.ph',
         'password' => Hash::make('buenavides123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'POL IAN M. BUGADOR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'polianbugador@sksu.edu.ph',
         'password' => Hash::make('bugador123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'IVY P. BULALOC',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ivybulaloc@sksu.edu.ph',
         'password' => Hash::make('bulaloc123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'WILBERT A. CABANBAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'wilbertcabanban@sksu.edu.ph',
         'password' => Hash::make('cabanban123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'VINCENT LOUIE D. CABELIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'vincentlouiecabelin@sksu.edu.ph',
         'password' => Hash::make('cabelin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALLAN JAY S. CAJANDIG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'allanjaycajandig@sksu.edu.ph',
         'password' => Hash::make('cajandig123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JUANITA S. CAJANDIG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'juanitacajandig@sksu.edu.ph',
         'password' => Hash::make('cajandig123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);


      DB::table('users')->insert([
         'name' => 'MA LYN A. CALUB',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'malyncalub@sksu.edu.ph',
         'password' => Hash::make('calub123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MICHAEL KENNEDY G. CAMARAO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'michaelkennedycamarao@sksu.edu.ph',
         'password' => Hash::make('camarao123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOHN REGNAIR M. CANDADO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'johnregnaircandado@sksu.edu.ph',
         'password' => Hash::make('candado123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JACQUILINE B. CANDIDO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jacquilinecandido@sksu.edu.ph',
         'password' => Hash::make('candido123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOVITA S. CARIGABA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jovitacarigaba@sksu.edu.ph',
         'password' => Hash::make('carigaba123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY JOY C. CARNAZO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maryjoycarnazo@sksu.edu.ph',
         'password' => Hash::make('carnazo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RHODINA C. CASTILLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rhodinacastillo@sksu.edu.ph',
         'password' => Hash::make('castillo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROMA AMOR M. CASTROMAYOR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'romaamorcastromayor@sksu.edu.ph',
         'password' => Hash::make('castromayor123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LENMAR T. CATAJAY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lenmarcatajay@sksu.edu.ph',
         'password' => Hash::make('catajay123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RODEL A. CATALAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rodelcatalan@sksu.edu.ph',
         'password' => Hash::make('catalan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'KAREN L. CATANE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'karencatane@sksu.edu.ph',
         'password' => Hash::make('catane123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ARNOLD Z. CATIPAY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'arnoldcatipay@sksu.edu.ph',
         'password' => Hash::make('catipay123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);


      DB::table('users')->insert([
         'name' => 'KRISTINE JOY L. CATIWALAAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'kristinejoycatiwalaan@sksu.edu.ph',
         'password' => Hash::make('catiwalaan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LANI B. CEJES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lanicejes@sksu.edu.ph',
         'password' => Hash::make('cejes123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ARNEL Y. CELESTE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'arnelceleste@sksu.edu.ph',
         'password' => Hash::make('celeste123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);


      DB::table('users')->insert([
         'name' => 'ERNIE C. CERADO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'erniecerado@sksu.edu.ph',
         'password' => Hash::make('cerado123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DONALD A. COGO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'donaldcogo@sksu.edu.ph',
         'password' => Hash::make('cogo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOVITA M. COLLADO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jovitacollado@sksu.edu.ph',
         'password' => Hash::make('collado123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LUZVIMINDA D. COLONG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'luzvimindacolong@sksu.edu.ph',
         'password' => Hash::make('colong123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NIEVES J. COMICHO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nievescomicho@sksu.edu.ph',
         'password' => Hash::make('comicho123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ELLEN L. CONSOMO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ellenconsomo@sksu.edu.ph',
         'password' => Hash::make('consomo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RIZALYN B. CUDERA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rizalyncudera@sksu.edu.ph',
         'password' => Hash::make('cudera123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GINA S. CUENCA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ginacuenca@sksu.edu.ph',
         'password' => Hash::make('cuenca123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LEAH A. DADOLI',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leahdadoli@sksu.edu.ph',
         'password' => Hash::make('dadoli123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'HANNAH L. DAFIELMOTO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'hannahdafielmoto@sksu.edu.ph',
         'password' => Hash::make('dafielmoto123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHERYL P. DAGA AS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cheryldagaas@sksu.edu.ph',
         'password' => Hash::make('dagaas123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'REMIGILDO S. DAGAMAC',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'remigildodagamac@sksu.edu.ph',
         'password' => Hash::make('dagamac123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GERWIN G. DAGUM',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gerwindagum@sksu.edu.ph',
         'password' => Hash::make('dagum123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NURAISA S. DALIDA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nuraisadalida@sksu.edu.ph',
         'password' => Hash::make('dalida123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOHN ERNEST R. DAMANDAMAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'johnernestdamandaman@sksu.edu.ph',
         'password' => Hash::make('damandaman123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'TEFANNY V. DANIEL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'tefannydaniel@sksu.edu.ph',
         'password' => Hash::make('daniel123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'YOLANDA C. DAPITAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'yolandadapitan@sksu.edu.ph',
         'password' => Hash::make('dapitan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ARMANDO S. DARDO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'armandodardo@sksu.edu.ph',
         'password' => Hash::make('dardo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RENATO B. DE LA CRUZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'renatodelacruz@sksu.edu.ph',
         'password' => Hash::make('delacruz123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RANDE B. DECHAVEZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'randedechavez@sksu.edu.ph',
         'password' => Hash::make('dechavez123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'APRIL KRIS D. DELA CRUZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'aprilkrisdelacruz@sksu.edu.ph',
         'password' => Hash::make('delacruz123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CRIS JOHN BRYAN C. DELA CRUZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'crisjohnbryandela cruz@sksu.edu.ph',
         'password' => Hash::make('delacruz123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MANDY A. DELFIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mandydelfin@sksu.edu.ph',
         'password' => Hash::make('delfin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'REYNAN E. DEMAFELIZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reynandemafeliz@sksu.edu.ph',
         'password' => Hash::make('demafeliz123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LODIFEL C. DEYPALAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lodifeldeypalan@sksu.edu.ph',
         'password' => Hash::make('deypalan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ELVIE V. DIAZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'elviediaz@sksu.edu.ph',
         'password' => Hash::make('diaz123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EVORA H. DIONEZA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'evoradioneza@sksu.edu.ph',
         'password' => Hash::make('dioneza123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DENMARK N. DIZO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'denmarkdizo@sksu.edu.ph',
         'password' => Hash::make('dizo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'KYRENE L. DIZON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'kyrenedizon@sksu.edu.ph',
         'password' => Hash::make('dizon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOHN C. DOMONDON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'johndomondon@sksu.edu.ph',
         'password' => Hash::make('domondon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'VELESSA JANE B. DULIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'velessa janedulin@sksu.edu.ph',
         'password' => Hash::make('dulin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LUDY R. DURAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ludyduran@sksu.edu.ph',
         'password' => Hash::make('duran123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RAYMOND E. EDISAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'raymondedisan@sksu.edu.ph',
         'password' => Hash::make('edisan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SALLY J. EDZA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'sallyedza@sksu.edu.ph',
         'password' => Hash::make('edza123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GLORY JEAN B. EIMAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gloryjeaneiman@sksu.edu.ph',
         'password' => Hash::make('eiman123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'REY R. EJERCITO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reyejercito@sksu.edu.ph',
         'password' => Hash::make('ejercito123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GLORIA D. ENVIDIADO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gloriaenvidiado@sksu.edu.ph',
         'password' => Hash::make('envidiado123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DOMINIC A. ESCAÑO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dominicescano@sksu.edu.ph',
         'password' => Hash::make('escano123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LOWELL D. ESPINOSA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lowellespinosa@sksu.edu.ph',
         'password' => Hash::make('espinosa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SANDRA E. ESPINOSA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'sandraespinosa@sksu.edu.ph',
         'password' => Hash::make('espinosa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NENITA V. ESTEBAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nenitaesteban@sksu.edu.ph',
         'password' => Hash::make('esteban123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ARNOLD V. ESTRELLA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'arnoldestrella@sksu.edu.ph',
         'password' => Hash::make('estrella123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOSELYN M. ESTRELLAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joselynestrellan@sksu.edu.ph',
         'password' => Hash::make('estrellan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ELBERT C. ETRATA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'elbertetrata@sksu.edu.ph',
         'password' => Hash::make('etrata123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CIRILO L. EVANGELISTA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ciriloevangelista@sksu.edu.ph',
         'password' => Hash::make('evangelista123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'IVAN ROY S. EVANGELISTA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ivanroyevangelista@sksu.edu.ph',
         'password' => Hash::make('evangelista123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JAYSON A. FALLE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jaysonfalle@sksu.edu.ph',
         'password' => Hash::make('falle123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JENA MAE M. FATAGANI',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jenamaefatagani@sksu.edu.ph',
         'password' => Hash::make('fatagani123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DIVINA T. FELICIANO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'divinafeliciano@sksu.edu.ph',
         'password' => Hash::make('feliciano123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARVIN T. FERMASE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marvinfermase@sksu.edu.ph',
         'password' => Hash::make('fermase123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANITA C. FLORES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'anitaflores@sksu.edu.ph',
         'password' => Hash::make('flores123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EFREN C. FLORES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'efrenflores@sksu.edu.ph',
         'password' => Hash::make('flores123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROSELYN A. FLORESCA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'roselynfloresca@sksu.edu.ph',
         'password' => Hash::make('floresca123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANNIE D. FRANCISCO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'anniefrancisco@sksu.edu.ph',
         'password' => Hash::make('francisco123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOSEPHINE F. FREIRES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'josephinefreires@sksu.edu.ph',
         'password' => Hash::make('freires123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHRISTINE G. FUNA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'christinefuna@sksu.edu.ph',
         'password' => Hash::make('funa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CORAZON N. GABATO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'corazongabato@sksu.edu.ph',
         'password' => Hash::make('gabato123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MAY C. GALLANO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maygallano@sksu.edu.ph',
         'password' => Hash::make('gallano123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY GRACE O. GALLEGO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marygracegallego@sksu.edu.ph',
         'password' => Hash::make('gallego123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALEXES N. GALLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'alexesgallo@sksu.edu.ph',
         'password' => Hash::make('gallo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MA RHODORA R. GALLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marhodoragallo@sksu.edu.ph',
         'password' => Hash::make('gallo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOYLYN S. GAMIAO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joylyngamiao@sksu.edu.ph',
         'password' => Hash::make('gamiao123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JUDITH C. GENOTA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'judithgenota@sksu.edu.ph',
         'password' => Hash::make('genota123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOHN LARRY G. GEONIGO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'johnlarrygeonigo@sksu.edu.ph',
         'password' => Hash::make(''),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'FATIMA G. GOLENG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'fatimagoleng@sksu.edu.ph',
         'password' => Hash::make('goleng123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'OLIVE G. GOMEZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'olivegomez@sksu.edu.ph',
         'password' => Hash::make('gomez123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'SARAH JANE D. GRANDE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'sarahjanegrande@sksu.edu.ph',
         'password' => Hash::make('grande123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JORDAN M. GUIAMADIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jordanguiamadin@sksu.edu.ph',
         'password' => Hash::make('guiamadin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'JOSUE V. GUINSAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'josueguinsan@sksu.edu.ph',
         'password' => Hash::make('guinsan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHARISSA JOY A. GUMBAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'charissajoygumban@sksu.edu.ph',
         'password' => Hash::make('gumban123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'RUBY S. HECHANOVA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rubyhechanova@sksu.edu.ph',
         'password' => Hash::make('hechanova123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'VIRDEN S. HECHANOVA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'virdenhechanova@sksu.edu.ph',
         'password' => Hash::make('hechanova123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'SAMUEL MORS D. HILBERO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'samuelmorshilbero@sksu.edu.ph',
         'password' => Hash::make('hilbero123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LAUREEN KAYE C. HUEVAS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'laureenkayehuevas@sksu.edu.ph',
         'password' => Hash::make('huevas123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'LEO C. IBOT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leoibot@sksu.edu.ph',
         'password' => Hash::make('ibot123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LEONARDO C. IBOT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leonardoibot@sksu.edu.ph',
         'password' => Hash::make('ibot123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'ROSALIE S. IBOT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rosalieibot@sksu.edu.ph',
         'password' => Hash::make('ibot123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANNIELYN A. IGNES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'annielynignes@sksu.edu.ph',
         'password' => Hash::make('ignes123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

       DB::table('users')->insert([
         'name' => 'GREGORIO C. ILAO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gregorioilao@sksu.edu.ph',
         'password' => Hash::make('ilao123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EVA REA FAME V. INOCENTE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'evareafameinocente@sksu.edu.ph',
         'password' => Hash::make('inocente123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'KRISTINE MAE L. ISALES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'kristinemaeisales@sksu.edu.ph',
         'password' => Hash::make('isales123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NICOLAS C. JACINTO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nicolasjacinto@sksu.edu.ph',
         'password' => Hash::make('jacinto123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CRISELDA M. JEREZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'criseldajerez@sksu.edu.ph',
         'password' => Hash::make('jerez123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROY C. JORDAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'royjordan@sksu.edu.ph',
         'password' => Hash::make('jordan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOHN G. JUARIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'johnjuario@sksu.edu.ph',
         'password' => Hash::make('juario123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MERRY CHRISSE C. KAMAD',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'merrychrissekamad@sksu.edu.ph',
         'password' => Hash::make('kamad123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'KORRIE B. KASIM',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'korriekasim@sksu.edu.ph',
         'password' => Hash::make('kasim123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RICK B. KASIM',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rickkasim@sksu.edu.ph',
         'password' => Hash::make('kasim123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'FAHMIYA D. KIRAB',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'fahmiyakirab@sksu.edu.ph',
         'password' => Hash::make('kirab123'),
         'role_id' => 3,
         'position_id' => 9,
         'department_id'=> 50
      ]);


      DB::table('users')->insert([
         'name' => 'GISELLE A. LADEMORA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gisellelademora@sksu.edu.ph',
         'password' => Hash::make('lademora123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHARMIE A. LAGDAMEN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'charmielagdamen@sksu.edu.ph',
         'password' => Hash::make('lagdamen123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOSE P. LAGDAMEN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joselagdamen@sksu.edu.ph',
         'password' => Hash::make('lagdamen123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JORGE L. LAGUDA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jorgelaguda@sksu.edu.ph',
         'password' => Hash::make('laguda123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROMMEL M. LAGUMEN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rommellagumen@sksu.edu.ph',
         'password' => Hash::make('lagumen123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MEREDY D. LANDERO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'meredylandero@sksu.edu.ph',
         'password' => Hash::make('landero123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'VICTORINO M. LAVISTE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'victorinolaviste@sksu.edu.ph',
         'password' => Hash::make('laviste123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RUBY M. LEGARDE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rubylegarde@sksu.edu.ph',
         'password' => Hash::make('legarde123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EDUARDO S. LEQUIGAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'eduardolequigan@sksu.edu.ph',
         'password' => Hash::make('lequigan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DEXTER C. LEYSA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dexterleysa@sksu.edu.ph',
         'password' => Hash::make('leysa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MERLYN P. LEYSA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'merlynleysa@sksu.edu.ph',
         'password' => Hash::make('leysa123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LOVELYN C. LLANILLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lovelynllanillo@sksu.edu.ph',
         'password' => Hash::make('llanillo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY JANE D. LOQUIS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maryjaneloquis@sksu.edu.ph',
         'password' => Hash::make('loquis123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SUSAN P. LOSAÑES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'susanlosanes@sksu.edu.ph',
         'password' => Hash::make('losanes123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ERLINDA S. LUCEÑO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'erlindaluceno@sksu.edu.ph',
         'password' => Hash::make('luceno123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RIZZA G. LUMANGCO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rizzalumangco@sksu.edu.ph',
         'password' => Hash::make('lumangco123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JENEVIEVE D. LUMBU AN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jenevievelumbuan@sksu.edu.ph',
         'password' => Hash::make('lumbuan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOYCELLE C. LUMOGDANG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joycellelumogdang@sksu.edu.ph',
         'password' => Hash::make('lumogdang123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MANSHUR A. LUNA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'manshurluna@sksu.edu.ph',
         'password' => Hash::make('luna123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'TONINA M. LUNA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'toninaluna@sksu.edu.ph',
         'password' => Hash::make('luna123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MERLINDA B. MACASAYON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'merlindamacasayon@sksu.edu.ph',
         'password' => Hash::make('macasayon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JUDITH A. MACHAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'judithmachan@sksu.edu.ph',
         'password' => Hash::make('machan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'IVY LYNN F. MADRIAGA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ivylynnmadriaga@sksu.edu.ph',
         'password' => Hash::make('madriaga123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALVIN E. MAGBANUA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'alvinmagbanua@sksu.edu.ph',
         'password' => Hash::make('magbanua123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHERRYLOU B. MAGBANUA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cherryloumagbanua@sksu.edu.ph',
         'password' => Hash::make('magbanua123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY LYNN G. MAGBANUA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marylynnmagbanua@sksu.edu.ph',
         'password' => Hash::make('magbanua123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHARLIE J. MAGHANOY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'charliemaghanoy@sksu.edu.ph',
         'password' => Hash::make('maghanoy123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALLAN A. MAGLANTAY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'allanmaglantay@sksu.edu.ph',
         'password' => Hash::make('maglantay123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY GRACE G. MAGLANTAY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marygracemaglantay@sksu.edu.ph',
         'password' => Hash::make('maglantay123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DUMA J. MAKALILAY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dumamakalilay@sksu.edu.ph',
         'password' => Hash::make('makalilay 123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'AMERA C. MALACO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ameramalaco@sksu.edu.ph',
         'password' => Hash::make('malaco123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOSEPHINE P. MALINOG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'josephinemalinog@sksu.edu.ph',
         'password' => Hash::make('malinog123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NORMINA A. MAMALINTA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'norminamamalinta@sksu.edu.ph',
         'password' => Hash::make('mamalinta123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GRACIELA LOU F. MANA-AY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gracielaloumanaay@sksu.edu.ph',
         'password' => Hash::make('manaay123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RESHNEY F. MANANGAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'reshneymanangan@sksu.edu.ph',
         'password' => Hash::make('manangan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANESA P. MANGINDRA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'anesamangindra@sksu.edu.ph',
         'password' => Hash::make('mangindra123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANNA ROSE T. MARCELINO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'annarosemarcelino@sksu.edu.ph',
         'password' => Hash::make('marcelino123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JUNITO P. MARCELINO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'junitomarcelino@sksu.edu.ph',
         'password' => Hash::make('marcelino123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'YORYNCITA C. MARFORI',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'yoryncitamarfori@sksu.edu.ph',
         'password' => Hash::make('marfori123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RUBILEE S. MARIANO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rubileemariano@sksu.edu.ph',
         'password' => Hash::make('mariano123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'VINA MARIE A. MARTIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'vinamariemartin@sksu.edu.ph',
         'password' => Hash::make('martin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RICHARD K. MASLA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'richardmasla@sksu.edu.ph',
         'password' => Hash::make('masla123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ADELAIDA R. MATILOS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'adelaidamatilos@sksu.edu.ph',
         'password' => Hash::make('matilos123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RANDY E. MAYO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'randymayo@sksu.edu.ph',
         'password' => Hash::make('mayo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LEILA JANE D. MENDOZA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leilajanemendoza@sksu.edu.ph',
         'password' => Hash::make('mendoza123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MANOLO B. MERCADO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'manolomercado@sksu.edu.ph',
         'password' => Hash::make('mercado123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LEIZEL C. MERIALES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leizelmeriales@sksu.edu.ph',
         'password' => Hash::make('meriales123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EDRALIN D. MESIAS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'edralinmesias@sksu.edu.ph',
         'password' => Hash::make('mesias123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'VICTORIA A. MIJARES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'victoriamijares@sksu.edu.ph',
         'password' => Hash::make('mijares123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GRACE JOY T. MILLENDEZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'gracejoymillendez@sksu.edu.ph',
         'password' => Hash::make('millendez123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY GRACE S. MOLINA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marygracemolina@sksu.edu.ph',
         'password' => Hash::make('molina123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ZILJIH S. MOLINA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ziljihmolina@sksu.edu.ph',
         'password' => Hash::make('molina123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EMY A. MORBO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'emymorbo@sksu.edu.ph',
         'password' => Hash::make('morbo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NORA M. MOYA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'noramoya@sksu.edu.ph',
         'password' => Hash::make('moya123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'AMELITA A. MOYET',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'amelitamoyet@sksu.edu.ph',
         'password' => Hash::make('moyet123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'PATERNA A. MURILLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'paternamurillo@sksu.edu.ph',
         'password' => Hash::make('murillo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NATHANIEL D. NAANEP',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nathanielnaanep@sksu.edu.ph',
         'password' => Hash::make('naanep123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CESAR J. NALLOS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cesarnallos@sksu.edu.ph',
         'password' => Hash::make('nallos123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROMEO C. NARCILLA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'romeonarcilla@sksu.edu.ph',
         'password' => Hash::make('narcilla123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RAMONITO J. NAZARENO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ramonitonazareno@sksu.edu.ph',
         'password' => Hash::make('nazareno123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LEONARD R. NECESITO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'leonardnecesito@sksu.edu.ph',
         'password' => Hash::make('necesito123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DEXTER C. NECOR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dexternecor@sksu.edu.ph',
         'password' => Hash::make('necor123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JAIME BOY U. NGAG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jaimeboyngag@sksu.edu.ph',
         'password' => Hash::make('ngag123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CELIA ROSE J. NOTA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'celiarosenota@sksu.edu.ph',
         'password' => Hash::make('nota123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ADRIANA B. OBENA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'adrianaobena@sksu.edu.ph',
         'password' => Hash::make('obena123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHONA A. OMEGA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'chonaomega@sksu.edu.ph',
         'password' => Hash::make('omega123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROSALINDA M. ONA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rosalindaona@sksu.edu.ph',
         'password' => Hash::make('ona123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'PAUL RYAN L. OÑAS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'paulryanonas@sksu.edu.ph',
         'password' => Hash::make('onas123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);
      
      DB::table('users')->insert([
         'name' => 'JUAREYN L. ONDOY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'juareynondoy@sksu.edu.ph',
         'password' => Hash::make('ondoy123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARK F. ONIA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'markonia@sksu.edu.ph',
         'password' => Hash::make('onia123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'IAN MARK E. ORCAJADA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ianmarkorcajada@sksu.edu.ph',
         'password' => Hash::make('orcajada123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHARITY L. ORIA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'charityoria@sksu.edu.ph',
         'password' => Hash::make('oria123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);
      
      DB::table('users')->insert([
         'name' => 'JECYLLE R. ORIANA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jecylleoriana@sksu.edu.ph',
         'password' => Hash::make('oriana123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JESUSA D. ORTUOSTE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jesusaortuoste@sksu.edu.ph',
         'password' => Hash::make('ortuoste123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROMUALDO M. ORTUOSTE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'romualdoortuoste@sksu.edu.ph',
         'password' => Hash::make('ortuoste123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALLAN REY M. PACULANAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'allanreypaculanan@sksu.edu.ph',
         'password' => Hash::make('paculanan123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);
      
      DB::table('users')->insert([
         'name' => 'AMY M. PADERNAL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'amypadernal@sksu.edu.ph',
         'password' => Hash::make('padernal123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MERLE C. PADILLA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'merlepadilla@sksu.edu.ph',
         'password' => Hash::make('padilla123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ARTCHIE P. PADIOS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'artchiepadios@sksu.edu.ph',
         'password' => Hash::make('padios123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ELMER T. PAHM',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'elmerpahm@sksu.edu.ph',
         'password' => Hash::make('pahm123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);
      
      DB::table('users')->insert([
         'name' => 'VERONICA D. PAHM',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'veronicapahm@sksu.edu.ph',
         'password' => Hash::make('pahm123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SALVADOR A. PAL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'salvadorpal@sksu.edu.ph',
         'password' => Hash::make('pal123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'LYWELYN M. PALANOG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'lywelynpalanog@sksu.edu.ph',
         'password' => Hash::make('palanog123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROGELIO C. PALANOG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rogeliopalanog@sksu.edu.ph',
         'password' => Hash::make('palanog123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);
      
      DB::table('users')->insert([
         'name' => 'JEZYL E. PALAPOS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jezylpalapos@sksu.edu.ph',
         'password' => Hash::make('palapos123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANJANNETE C. PALLARCON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'anjannetepallarcon@sksu.edu.ph',
         'password' => Hash::make('pallarcon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CYNTHIA L. PAMA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cynthiapama@sksu.edu.ph',
         'password' => Hash::make('pama123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'PERCILA M. PANAGDATO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'percilapanagdato@sksu.edu.ph',
         'password' => Hash::make('panagdato123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);
      
      DB::table('users')->insert([
         'name' => 'NORHATA T. PANDAY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'norhatapanday@sksu.edu.ph',
         'password' => Hash::make('panday123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'IRIL I. PANES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'irilpanes@sksu.edu.ph',
         'password' => Hash::make('panes123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'BADU M. PANIMBANG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'badupanimbang@sksu.edu.ph',
         'password' => Hash::make('panimbang123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SUNSHINE M. PARAICO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'sunshineparaico@sksu.edu.ph',
         'password' => Hash::make('paraico123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EMERSON G. PARCON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'emersonparcon@sksu.edu.ph',
         'password' => Hash::make('parcon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY GRACE P. PASQUIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marygracepasquin@sksu.edu.ph',
         'password' => Hash::make('pasquin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DOLORCITA E. PAUYA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dolorcitapauya@sksu.edu.ph',
         'password' => Hash::make('pauya123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CRISTELA MARIE M. PELARCO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cristelamariepelarco@sksu.edu.ph',
         'password' => Hash::make('pelarco123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARILOU U. PEREZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marilouperez@sksu.edu.ph',
         'password' => Hash::make('perez123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JONALYN S. PERFECIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jonalynperfecio@sksu.edu.ph',
         'password' => Hash::make('perfecio123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARY GRACE L. PEROCHO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marygraceperocho@sksu.edu.ph',
         'password' => Hash::make('perocho123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RICHARD H. PIMENTEL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'richardpimentel@sksu.edu.ph',
         'password' => Hash::make('pimentel123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EVA C. POLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'evapolo@sksu.edu.ph',
         'password' => Hash::make('polo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOEMARIE A. PONO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joemariepono@sksu.edu.ph',
         'password' => Hash::make('pono123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EUFEMIA B. PORQUE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'eufemiaporque@sksu.edu.ph',
         'password' => Hash::make('porque123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EDMARLYN C. PORRAS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'edmarlynporras@sksu.edu.ph',
         'password' => Hash::make('porras123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ADRIAN V. PROTACIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'adrianprotacio@sksu.edu.ph',
         'password' => Hash::make('protacio123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'VIRGINIA E. PUBLICO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'virginiapublico@sksu.edu.ph',
         'password' => Hash::make('publico123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHERYL T. PUEBLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cherylpueblo@sksu.edu.ph',
         'password' => Hash::make('pueblo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'EDEN R. QUILLA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'edenquilla@sksu.edu.ph',
         'password' => Hash::make('quilla123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GERALDINE P. QUILLO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'geraldinequillo@sksu.edu.ph',
         'password' => Hash::make('quillo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JANET F. RABUT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'janetrabut@sksu.edu.ph',
         'password' => Hash::make('rabut123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CYRUS B. RAEL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cyrusrael@sksu.edu.ph',
         'password' => Hash::make('rael123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'AVELINO HERMAN B. RAMOS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'avelinohermanramos@sksu.edu.ph',
         'password' => Hash::make('ramos123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'BRANDO C. RAZON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'brandorazon@sksu.edu.ph',
         'password' => Hash::make('razon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MAE D. REBUGIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maerebugio@sksu.edu.ph',
         'password' => Hash::make('rebugio123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ALEX N. REMEGIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'alexremegio@sksu.edu.ph',
         'password' => Hash::make('remegio123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'FLORLYN MAE S. REMEGIO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'florlynmaeremegio @sksu.edu.ph',
         'password' => Hash::make('remegio123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'BERNARD A. RENDON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'bernardrendon@sksu.edu.ph',
         'password' => Hash::make('rendon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANDRES T. REYES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'andresreyes@sksu.edu.ph',
         'password' => Hash::make('reyes123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARIANIE L. REYES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marianiereyes@sksu.edu.ph',
         'password' => Hash::make('reyes123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CARLOS S. RIVERA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'carlosrivera@sksu.edu.ph',
         'password' => Hash::make('rivera123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JONATHAN P. ROQUE',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jonathanroque@sksu.edu.ph',
         'password' => Hash::make('roque123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CERILO B. RUBIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cerilorubin@sksu.edu.ph',
         'password' => Hash::make('rubin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARIBETH P. SALABAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maribethsalaban@sksu.edu.ph',
         'password' => Hash::make('salaban123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MICKLE DAN M. SALADINO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mickledansaladino@sksu.edu.ph',
         'password' => Hash::make('saladino123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CARILYN S. SALANIO-MARTIN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'carilynsalaniomartin@sksu.edu.ph',
         'password' => Hash::make('salaniomartin123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JAN MICHAEL B. SALDICAYA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'janmichaelsaldicaya@sksu.edu.ph',
         'password' => Hash::make('saldicaya123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'FAHAD A. SALENDAB',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'fahadsalendab@sksu.edu.ph',
         'password' => Hash::make('salendab123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SAMUEL R. SALVADOR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'samuelsalvador@sksu.edu.ph',
         'password' => Hash::make('salvador123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'AINEE GRACE S. SANSANO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'aineegracesansano@sksu.edu.ph',
         'password' => Hash::make('sansano123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DENAFEL C. SARAÑA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'denafelsarana@sksu.edu.ph',
         'password' => Hash::make('sarana123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROSELA O. SAZON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'roselasazon@sksu.edu.ph',
         'password' => Hash::make('sazon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JOE H. SELAYRO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'joeselayro@sksu.edu.ph',
         'password' => Hash::make('selayro123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ARNULFO C. SOLINAP',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'arnulfosolinap@sksu.edu.ph',
         'password' => Hash::make('solinap123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RODOLFO B. SOLOMON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rodolfosolomon@sksu.edu.ph',
         'password' => Hash::make('solomon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MARILOU P. SOMBRIA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'marilousombria@sksu.edu.ph',
         'password' => Hash::make('sombria123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JAYSON S. SUHAYON',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'jaysonsuhayon@sksu.edu.ph',
         'password' => Hash::make('suhayon123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'HAZEL MAE B. SULAIMAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'hazelmaesulaiman@sksu.edu.ph',
         'password' => Hash::make('sulaiman123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'SHAIDA B. SUMAPAL',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'shaidasumapal@sksu.edu.ph',
         'password' => Hash::make('sumapal123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GINA ROSE TREXIANNE S. SY',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ginarosetrexiannesy@sksu.edu.ph',
         'password' => Hash::make('sy123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MAY NECTAR CYRILL L. TABARES',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'maynectarcyrilltabares@sksu.edu.ph',
         'password' => Hash::make('tabares123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROSEMARY C. TABINGO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rosemarytabingo@sksu.edu.ph',
         'password' => Hash::make('tabingo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'KENDATU L. TAGO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'kendatutago@sksu.edu.ph',
         'password' => Hash::make('tago123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'KAREN B. TALIDONG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'karentalidong@sksu.edu.ph',
         'password' => Hash::make('talidong123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'GLENN S. TALUA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'glenntalua@sksu.edu.ph',
         'password' => Hash::make('talua123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MOHAIDA A. TAMAMA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mohaidatamama@sksu.edu.ph',
         'password' => Hash::make('tamama123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DOREEN B. TAMPUS',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'doreentampus@sksu.edu.ph',
         'password' => Hash::make('tampus123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MAY FLOR L. TAPOT',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mayflortapot@sksu.edu.ph',
         'password' => Hash::make('tapot123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'JUDY E. TIAÑA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'judytiana@sksu.edu.ph',
         'password' => Hash::make('tiana123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'RICHARD S. TOLEDO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'richardtoledo@sksu.edu.ph',
         'password' => Hash::make('toledo123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ROSE VIÑA E. TUTOR',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'rosevinatutor@sksu.edu.ph',
         'password' => Hash::make('tutor123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ERNESTO L. UMIPIG',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'ernestoumipig@sksu.edu.ph',
         'password' => Hash::make('umipig123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'MOHAMMAD ISA S. USMAN',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'mohammadisausman@sksu.edu.ph',
         'password' => Hash::make('usman123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANNIERAH M. USOP',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'annierahusop@sksu.edu.ph',
         'password' => Hash::make('usop123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'ANAMARIE G. VALDEZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'anamarievaldez@sksu.edu.ph',
         'password' => Hash::make('valdez123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'DENNIS M. VALDEZ',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'dennisvaldez@sksu.edu.ph',
         'password' => Hash::make('valdez123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NE B. VELASCO',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'nevelasco@sksu.edu.ph',
         'password' => Hash::make('velasco123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'CHERRY VANESSA M. VENTURA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'cherryvanessaventura@sksu.edu.ph',
         'password' => Hash::make('ventura123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);

      DB::table('users')->insert([
         'name' => 'NOEL R. VILLANUEVA',
         'birth_day' =>  Carbon::create('2000', '04', '06'),
         'contact_number' => '09123456789',
         'email' => 'noelvillanueva@sksu.edu.ph',
         'password' => Hash::make('villanueva123'),
         'role_id' => 3,
         'position_id' => 9,
'department_id'=> 50
      ]);






      //test vars
      //   DB::table('users')->insert([
      //      'name'=> 'Heiven C Cordero',
      //      'birth_day'=>  Carbon::create('1986', '04', '06'),   
      //      'contact_number'=>'09123456789',        
      //      'email'=>'hcc@dep.com',
      //      'password'=> Hash::make('hcc123'),
      //      'role_id'=>3,
      //      'department_id'=>3,
      //      'position_id'=>2]);

      //   DB::table('users')->insert([
      //      'name'=> 'Mentha C. La Palma',
      //      'birth_day'=>  Carbon::create('1998', '04', '06'),   
      //      'contact_number'=>'09123456789',        
      //      'email'=>'mclp@budget.com',
      //      'password'=> Hash::make('mclp123'),
      //      'role_id'=>3,
      //      'department_id'=>3,
      //      'position_id'=>7]);

      //   DB::table('users')->insert([
      //      'name'=> 'Douglas P. Canlubang',
      //      'birth_day'=>  Carbon::create('1988', '04', '06'),   
      //      'contact_number'=>'09123456789',        
      //      'email'=>'dpc@icu.com',
      //      'password'=> Hash::make('dpc123'),
      //      'role_id'=>3,
      //      'department_id'=>3,
      //      'position_id'=>11]);

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
