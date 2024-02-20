/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aktor;

import java.util.Scanner;

public class utama {

    static int pilihan;
    
    public static void main(String[] args) {
        System.out.println("*** SISTEM INFORMASI NILAI ***");
        System.out.println("*** versi 1.0 ***");
        System.out.println("*** Made by Zulkifli Abdillah ***");
        System.out.println("*** Tanggal 25 Oktober 2018 ***");
        System.out.println("=======================================");
        System.out.println("");
        System.out.println("");
        
        do{
            menu();
        }while (pilihan!=7);
        
    }
    private static void menu(){
        guru guru1=new guru();
        guru guru2=new guru();
        guru guru3=new guru();
        siswa objsiswa = new siswa();
        
        do{
            System.out.println("MENU PILIHAN");
            System.out.println("=====================================");
            System.out.println("1. Masukkan data guru");
            System.out.println("2. Masukkan data Nilai Siswa");
            System.out.println("3. Tampilkan data guru");
            System.out.println("4. Tampilkan data nilai siswa");
            System.out.println("5. Urutkan Nilai Siswa");
            System.out.println("6. Cari Nilai Siswa");
            System.out.println("7. Keluar");
            System.out.println("");
            System.out.println("=====================================");
            System.out.println("Pilihan (1,2,3,4,5,6,7)    :");
            
            Scanner input = new Scanner(System.in);
            
            try{
                pilihan=input.nextInt();
            }catch(Exception e){
                System.out.println("Harus Angka !");
            }
            
            switch(pilihan){
                case 1 ->{
                        guru1.setdataguru("Budi", 1111,"X TKJ", "Matematika");
                        guru2.setdataguru("Wanda", 2222,"X MM", "B. Indonesia");
                        guru3.setdataguru("Karim", 3333,"X RPL", "Olahraga");
                        System.out.println("Data berhasil dimasukkan !");
                        System.out.println("");
                }
                case 2 -> {
                    System.out.println("Masukkan Data Nilai Siswa !");
                    System.out.println("");
                    objsiswa.setDataSiswa();
                    System.out.println("Data berhasil Dimasukkan !");
                    System.out.println("");
                }
                case 3 -> {
                    System.out.println("DATA GURU MATA PELAJARAN");
                    System.out.println("");
                    System.out.println("====================================");
                    System.out.format("%-10s","NAMA GURU");
                    System.out.format("%-10s","NIP");
                    System.out.format("%-10s","KELAS");
                    System.out.format("%-10s","MAPEL");
                    System.out.println("");
                    System.out.println("=============================================");
                    System.out.println("");
                    guru1.infoaktor();
                    System.out.println("");
                    guru2.infoaktor();
                    System.out.println("");
                    guru3.infoaktor();
                    System.out.println("");
                    System.out.println("=============================================");
                    System.out.println("");
                }
                case 4 -> {
                    System.out.println("DATA NILAI SISWA KELAS XI");
                    System.out.println("=================================================================");
                    
                    System.out.println("Bobot UTS : 0.4     Bobot UAS : 0.6");
                    System.out.println("");
                    System.out.println("");
                    System.out.println("=================================================================");
                    System.out.format("%-10s","NIS");
                    System.out.format("%-10s","NAMA");
                    System.out.format("%-10s","UTS");
                    System.out.format("%-10s","UAS");
                    System.out.format("%-10s","TOTAL");
                    System.out.format("%-10s","GRADE");
                    System.out.println("");
                    System.out.println("=================================================================");
                    objsiswa.infoaktor();
                    System.out.println("");
                }
                case 5 -> {
                    objsiswa.sorting();
                    System.out.println("");
                }
                case 6 -> {
                    objsiswa.searching();
                    System.out.println("");
                }
                case 7 -> System.exit(0);
                default -> System.out.println("Masukkan hanya angka 1-7");
            }
            
        }while (true);
        
        
    }
}
