/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Orang;

import java.util.Scanner;

public class Utama {
    
    static int pilihan;
    
    public static void main(String[] args) {
           System.out.println("*** SISTEM Penjualan Buku ***");
        System.out.println("*** versi 1.0 ***");
        System.out.println("*** Made by Ghoffar Abdul***");
        System.out.println("*** ... ***");
        System.out.println("=======================================");
        System.out.println("");
        System.out.println("");
        
        do{
            menu();
        }while (pilihan!=7);
    }
    public static void menu(){
       Kasir objkasir = new Kasir();
        Pembeli objpembeli = new Pembeli();
        
        do{
        
            System.out.println("Menu Pilihan");
            System.out.println("==============================");
            System.out.println("1. Masukkan data kasir");
            System.out.println("2. Masukkan data Buku");
            System.out.println("3. Tampilkan data kasir");
            System.out.println("4. Tampilkan data Total pembelian buku");
            System.out.println("5. Urutkan Total Harga buku");
            System.out.println("6. Cari Harga buku");
            System.out.println("7. Keluar");
            System.out.println("==============================");
            System.out.print("Pilihan (1-7)     :");
            
            Scanner input = new Scanner(System.in);
            
            try{
                pilihan = input.nextInt();
            }catch(Exception e){
                    System.out.println("Harus Angka !");
            }
            
            switch(pilihan){
                case 1->{
                    System.out.println("Masukkan data Kasir");
                    System.out.println("");
                    objkasir.setDataKasir();
                    System.out.println("Data berhasil dimasukkan !");
                    System.out.println("");
                }
                case 2->{
                    System.out.println("Masukkan Data Buku !");
                    System.out.println("");
                    objpembeli.setDataPembeli();
                    System.out.println("Data behasil dimasukkan");
                    System.out.println("");
                }
                case 3->{
                    System.out.println("DATA KASIR");
                    System.out.println("");
                    System.out.println("==================================");
                    System.out.format("%-10s","NAMA KASIR   ");
                    System.out.format("%-10s","ID");
                    System.out.format("%-10s","LANTAI");
                    System.out.println("");
                    System.out.println("=====================================================");
                    objkasir.infoOrang();
                    System.out.println("");
                    System.out.println("");
                    
                }
                case 4->{
                    System.out.println("TOTAL PEMBELIAN BUKU");
                    System.out.println("==================================================================================================");
                    
                    System.out.println("Diskon Buku : 1.5");
                    System.out.println("");
                    System.out.println("");
                    System.out.println("==================================================================================================");
                    System.out.format("%-10s","ID_BELI ");
                    System.out.format("%-10s","NAMA_BUKU1 ");
                    System.out.format("%-10s","HARGA_BUKU1 ");
                    System.out.format("%-10s","NAMA_BUKU2 ");
                    System.out.format("%-10s","HARGA_BUKU2 ");
                    System.out.format("%-10s","DISKON ");
                    System.out.format("%-10s","TOTAL ");
                    System.out.format("%-10s","BONUS ");
                    System.out.println("");
                    System.out.println("==================================================================================================");
                    objpembeli.infoOrang();
                    System.out.println("");
                }
                case 5->{
                    objpembeli.sorting();
                    System.out.println("");
                }
                case 6->{
                    objpembeli.searching();
                }
                case 7->System.exit(0);
                default-> System.out.println("Masukkan hanya angka 1-7");
            }
        }while (true);
    }
    
}