/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PBO.Project01;

import java.util.Scanner;
/**
 *
 * @author kb-tech
 */
public class Nilai {
    static String konfi;

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       
        System.out.println("=================");
        System.out.println("Nilai Raport");
        System.out.println("=================");
        do{
            menu();
        }while(!"tidak".equals(konfi) && !"Tidak".equals(konfi));
    }
    public static void menu(){
         
        Scanner input = new Scanner(System.in);
        
        System.out.println(""); 
        System.out.println("Masukkan Nama Anda : ");
        String nama = input.nextLine();
        System.out.println("Masukkan Kelas Anda : ");
        String kelas = input.nextLine();
        System.out.println("Masukkan Program Keahlian :");
        String keahlian = input.nextLine();
        System.out.println("Masukkan NIS :");
        int c = input.nextInt();
        System.out.println("Masukan Nilai Raport : ");
        int f = input.nextInt();
        System.out.println("");
        System.out.println("");
        
        System.out.println("-------------------------");
        System.out.println("Nama : "+nama);
        System.out.println("Kelas : "+kelas);
        System.out.println("NIS : "+c);
        System.out.println("Program Keahlian: "+keahlian);
        System.out.println("Nilai : "+f);
        
       if(f >=91){
           System.out.println("Selamat Anda Mendapat Grade A");
       }else if(f >=81){
           System.out.println("Selamat Anda Mendapat Grade B");
       }else if(f >=71){
           System.out.println("Selamat Anda Mendapat Grade C");
       }else if(f >=61){
           System.out.println("Selamat Anda Mendapat Grade D");
       }else if(f >=0){
           System.out.println("Selamat Anda Mendapat Grade E");
       }
        
        
        try{
            System.out.println("-------------------------");
            System.out.println("Ingin Mengetahui Nilai Raport Anda lagi?");
        konfi = input.next();
        }catch(Exception e){
            System.out.println("Yang betul kak!");
        }
        
    }
    
}
