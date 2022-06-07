<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Facture;
use App\Models\Produit;
use App\Models\Boutique;
use App\Models\Commande;
use App\Models\Etudiant;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user8=User::create([
            'name'=> 'jammaa',
            'type'=> 'user',
            'email'=> 'HassanJamaa@gmail.com',
            'password'=> bcrypt('12890'),
        ]);
        //admin
        $user1=User::create([
            'name'=> 'ali Belhaj',
            'type'=> 'admin superieur',
            'email'=> 'HassanAdmin@gmail.com',
            'password'=> bcrypt('1234'),
        ]);
        //boutique users
        $user3=User::create([
            'name'=> 'said motawakil',
            'type'=> 'admin boutique',
            'email'=> 'saidAdminB@gmail.com',
            'password'=> bcrypt('0000'),
        ]);


        $user4=User::create([
            'name'=> 'omar maeoli',
            'type'=> 'user boutique',
            'email'=> 'omarmolUser@gmail.com',
            'password'=> bcrypt('04500'),
        ]);
        $user5=User::create([
            'name'=> 'Ahmed jalomi',
            'type'=> 'user boutique',
            'email'=> 'ahmed@gmail.com',
            'password'=> bcrypt('9000'),
        ]);

        $user2=User::create([
            'name'=> 'zahra daoui',
            'type'=> 'etudiant',
            'email'=> 'zahradaoui@gmail.com',
            'password'=> bcrypt('0000'),
        ]);


        $boutique1=Boutique::create([
            'name'=> 'Macdonald',
            'if'=> 'ADC121F-07E',
            'cfe'=> 'H90998H',
            'description'=>'Macdonald restaut big ',
            'timDebut'=>'10:00',
            'timeFin'=>'12:00',
            'image'=> '/image/s/mcd.png',
            'user_id'=> $user3->id,

        ]);

        $boutique2=Boutique::create([
            'name'=> 'King burger',
            'if'=> 'BVC21F-07E',
            'cfe'=> 'K88998H',
            'description'=>'King burger restaurant ',
            'timDebut'=>'10:00',
            'timeFin'=>'09:00',
            'image'=> '/image/s/KFC.png',
            'user_id'=> $user1->id,

        ]);

        $boutique3=Boutique::create([
            'name'=> 'Family burger',
            'if'=> 'MNà001F-07E',
            'cfe'=> '10098H',
            'description'=>'Family burger restaurant   ',
            'timDebut'=>'9:00',
            'timeFin'=>'12:00',
            'image'=> '/image/s/chefd.jpg',
            'user_id'=> $user4->id,

        ]);
        $boutique2=Boutique::create([
            'name'=> 'TacosKing ',
            'if'=> 'AZ991F-07E',
            'cfe'=> 'HGGQ98H',
            'description'=>'restaut big',
            'timDebut'=>'11:00',
            'timeFin'=>'05:00',
            'image'=> '/image/s/logo.jpg',
            'user_id'=> $user4->id,

        ]);
        $etd3=Etudiant::create([

            'image'=>'/image/s/etud.jpg',
            'CNE'=> 'JH89434544',
            'CIN'=> 'H2234544',
            'nom'=> 'Alaoui',
            'prenom'=> 'Ilyas',
            'num_compte'=> '123j21KL',
            'solde'=> '1000',
            'user_id'=> $user2->id,

        ]);
        $etd1=Etudiant::create([

            'image'=>'/image/s/avatar.jpg',
            'CNE'=> 'D3434544',
            'CIN'=> 'H2234544',
            'nom'=> 'daoui',
            'prenom'=> 'zahra',
            'num_compte'=> '66621KL',
            'solde'=> '1300',
            'user_id'=> $user2->id,

        ]);
        $etd2=Etudiant::create([
            'image'=>'/image/s/avaatar.png',
            'CNE'=> 'D131768080',
            'CIN'=> 'DG34544',
            'nom'=> 'benki',
            'prenom'=> 'majd',
            'num_compte'=> '900j21KL',
            'solde'=> '100',
            'user_id'=> $user2->id,

        ]);
        $etd4=Etudiant::create([

            'image'=>'/image/s/etudd.jpg',
            'CNE'=> 'D13245500',
            'CIN'=> 'JB634544',
            'nom'=> 'Duliam',
            'prenom'=> 'Qassem',
            'num_compte'=> '7899k3j21KL',
            'solde'=> '900',
            'user_id'=> $user2->id,

        ]);
        $cmd1=Commande::create([
            'reference'=> 'D68080',
            'total'=> '45',
            'status'=> 'En cours',
            'created_at'=> '2022-04-01 13:09:01',
            'etudiant_id'=> $etd1->id,
        ]);
        $cmd2=Commande::create([
            'reference'=> 'JKI8080',
            'total'=> '78',
            'status'=> 'Faite',
            'created_at'=> '2022-04-01 13:09:01',
            'etudiant_id'=> $etd1->id,
        ]);
        $cmd3=Commande::create([
            'reference'=> '8HY7J0',
            'total'=> '70',
            'status'=> 'Cancel',
            'created_at'=> '2022-04-01 13:09:01',
            'etudiant_id'=> $etd2->id,
        ]);
        $cmd4=Commande::create([
            'reference'=> '00080',
            'total'=> '80',
            'status'=> 'Faite',
            'created_at'=> '2022-04-01 13:09:01',
            'etudiant_id'=> $etd3->id,
        ]);
         $prod1=Produit::create([
            'name'=> 'Orange juice ',
            'category'=> 'poissons',
            'description'=> 'Avec VA',
            'status'=>'active',
            'prix'=>'23',
            'image'=>'/image/s/1649113900.jpg',
            'quantite'=>'30',
            'created_at'=> '2022-04-01 13:09:01',

         ]);
         $prod2=Produit::create([
            'name'=> 'pizza ',
            'category'=> 'food',
            'description'=> 'viande hachée + frit',
            'status'=>'active',
            'prix'=>'23',
            'image'=>'/image/s/1649113900.jpg',
            'quantite'=>'20',
            'created_at'=> '2022-04-01 13:09:01',
         ]);


         $trans1=Transaction::create([
             'montant'=>'400',
             'status'=>'Out',
             'datePay'=>'2022-04-16',
             'etudiant_id'=> $etd3->id,
             'boutique_id'=> $boutique1->id,
             'created_at'=> '2022-04-01 13:09:01',

         ]);
         $trans11=Transaction::create([
            'montant'=>'400',
            'status'=>'Out',
            'datePay'=>'2022-04-16',
            'etudiant_id'=> $etd3->id,
            'boutique_id'=> $boutique2->id,
            'created_at'=> '2022-04-08 13:09:01',

        ]);
        $trans11=Transaction::create([
            'montant'=>'230',
            'status'=>'In',
            'datePay'=>'2022-04-30',
            'etudiant_id'=> $etd3->id,
            'created_at'=> '2022-04-09 13:09:01',

        ]);
        $trans11=Transaction::create([
            'montant'=>'400',
            'status'=>'Out',
            'datePay'=>'2022-04-16',
            'etudiant_id'=> $etd3->id,
            'boutique_id'=> $boutique3->id,
            'created_at'=> '2022-04-09 13:09:01',

        ]);
         $trans2=Transaction::create([
            'montant'=>'600',
            'status'=>'In',
            'datePay'=>'2022-04-16',
            'etudiant_id'=> $etd2->id,
            'created_at'=> '2022-04-01 13:09:01',

        ]);
        $trans3=Transaction::create([
            'montant'=>'200',
            'status'=>'Out',
            'datePay'=>'2022-04-16',
            'etudiant_id'=> $etd1->id,
            'boutique_id'=> $boutique1->id,
            'created_at'=> '2022-04-01 13:09:01',

        ]);
        $trans4=Transaction::create([
            'montant'=>'90',
            'status'=>'Out',
            'datePay'=>'2022-04-20',
            'etudiant_id'=> $etd2->id,
            'boutique_id'=> $boutique3->id,
            'created_at'=> '2022-04-07 13:09:01',

        ]);
        $fact1=Facture::create([
            'reference'=> 'fa-11627 DF',
            'dateFact'=>'2022-05-20',
            'montant'=> 800.88,
            'status'=>'Non validée',
             'boutique_id'=> $boutique2->id,

        ]);
        $fact2=Facture::create([
            'reference'=> 'fa-56627 DF',
            'dateFact'=>'2022-05-20',
            'montant'=>4800.88,
            'status'=>'validée',
             'boutique_id'=> $boutique2->id,

        ]);
        $fact3=Facture::create([
            'reference'=> 'fa-68627 DF',
            'dateFact'=>'2022-03-20',
            'montant'=>10000.88,
            'status'=>'validée',
             'boutique_id'=> $boutique1->id,

        ]);
        $fact4=Facture::create([
            'reference'=> 'fa-68627 DF',
            'dateFact'=>'2022-02-20',
            'montant'=>18800.88,
            'status'=>'validée',
             'boutique_id'=> $boutique1->id,

        ]);
        $fact5=Facture::create([
            'reference'=> 'fa-23117 DF',
            'dateFact'=>'2022-4-20',
            'montant'=>1670.88,
            'status'=>'validée',
             'boutique_id'=> $boutique1->id,

        ]);
        $fact6=Facture::create([
            'reference'=> 'fa-000027 DF',
            'dateFact'=>'2022-05-20',
            'montant'=>10000.88,
            'status'=>' Non validée',
             'boutique_id'=> $boutique1->id,

        ]);
        //   $cmd1->produits()->attach([ 1 =>['quantite'=>1], 2=>['quantite'=>4] ]);
        //   $cmd2->produits()->attach([ 3 =>['quantite'=>4], 2=>['quantite'=>6] ]);
        //   $cmd3->produits()->attach([ 2 =>['quantite'=>9], 1=>['quantite'=>5] ]);

          //   $cmd3->produits()->attach([ 50 =>['quantite'=>5], 39=>['quantite'=>4] ]);

}}
