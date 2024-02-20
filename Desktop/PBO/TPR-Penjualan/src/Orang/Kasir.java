/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Orang;

import java.util.Scanner;

public class Kasir extends Orang {
    private int ID;
    private String Lantai;
    private String NamaLantai;
    Kasir [] data = new Kasir[3];
    
    public void setDataKasir(int ID, String nama, String lantai){
        this.ID=ID;
        this.nama=nama;
        this.Lantai=lantai;
    }
    public void setDataKasir(){
        try{
            Scanner input = new Scanner(System.in);
            for(int i = 0; i < data.length; i++){
                data [i]=new Kasir();
                System.out.println("Data Kasir ke-"+ (i+1));
                System.out.println("ID :");
                data [i].ID=input.nextInt();
                System.out.println("Nama :");
                data [i].nama=input.next();
                System.out.println("Lantai :");
                data [i].Lantai=input.next();
                System.out.println("");
                System.out.println("");
            }
        }catch(Exception e){
            System.out.println("Input salah");
        }
    }
    @Override
     public void infoOrang(){
         for(int i = 0; i < data.length; i++){
         System.out.format("%-10s",data[i].nama);
        System.out.format("%-10s",data[i].ID);
        System.out.format("%-10s",data[i].Lantai);
        System.out.println("");
         }
         System.out.println("=====================================================");
         System.out.println("DATA KASIR");
     }
     public String getNamaLantai(){
         return NamaLantai;
     }
}