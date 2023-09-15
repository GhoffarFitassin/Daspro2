/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Orang;

import Interface.Kalkulasi;
import java.util.Scanner;

public class Pembeli extends Orang implements Kalkulasi {
    private int ID_beli;
    private int hargaBuku1;
    private int hargaBuku2;
    private double total;
    private String bonus;
    private final double diskon = 0.05;
    double rata;
    Pembeli [] data = new Pembeli[3];
    
    public void setDataPembeli(int id, String nama, int harga_buku1, int harga_buku2){
        this.ID_beli=id;
        this.nama=nama;
        this.hargaBuku1=harga_buku1;
        this.hargaBuku2=harga_buku2;
        
    }
    public void setDataPembeli(){
            try{
                Scanner input = new Scanner(System.in);
                for(int i = 0; i < data.length; i++){
                    data [i]=new Pembeli();
                    System.out.println("Data Buku ke-"+ (i+1));
                    System.out.println("ID :");
                    data [i].ID_beli=input.nextInt();
                    System.out.println("Nama :");
                    data [i].nama=input.next();
                    System.out.println("Harga Buku 1 :");
                    data [i].hargaBuku1=input.nextInt();
                     System.out.println("Nama :");
                    data [i].nama=input.next();
                    System.out.println("Harga Buku 2 :");
                    data [i].hargaBuku2=input.nextInt();
                    System.out.println("");
                    System.out.println("");
                }
            }catch(Exception e){
                System.out.println("Input salah");
            }
            hitungTotal();
            hitungBonus();
            hitungrata();
    }
    public void hitungTotal(){
        for (int i = 0; i < data.length; i ++){
            data[i].total=(data[i].hargaBuku1-(data[i].hargaBuku1*diskon))+(data[i].hargaBuku2-(data[i].hargaBuku2*diskon));
        }
    }
    @Override
    public void infoOrang(){
        for(int i = 0; i < data.length; i++){
            System.out.format("%-10s",data[i].ID_beli);
            System.out.format("%-10s",data[i].nama);
            System.out.format("%-10s",data[i].hargaBuku1);
            System.out.format("%-10s",data[i].nama);
            System.out.format("%-10s",data[i].hargaBuku2);
            System.out.format("%-10s",data[i].diskon);
            System.out.format("%-10s",data[i].total);
            System.out.format("%-10s",data[i].bonus);
            System.out.println("");
        }
        System.out.println("================================================================");
        System.out.println("RATA-RATA :");
    }

    
    @Override
    public double hitungrata(){
        for(int i = 0; i < data.length; i++){
            rata=rata+data[i].total;
        }
        rata=rata/data.length;
        return rata;
    }
    public String hitungBonus(){
        for(int i = 0; i < data.length; i++){
            if (data[i].total>=1000000){
                data[i].bonus="2 Buku+1 Buku Bergaransi";
            }else if(data[i].total>=500000){
                data[i].bonus="1 Buku+1 Buku Bergaransi";
            }else if(data[i].total>=50000){
                data[i].bonus="1 buku";
            }else if(data[i].total>=0){
                data[i].bonus="Kosong";
            }
        }
        
        return bonus;
    }
    @Override
    public void sorting(){
        System.out.println("");
        System.out.println("Total Harga Sebelum Diurutkan :");
        for(int i = 0; i < data.length; i++){
            System.out.println(data[i].total);
        }
        System.out.println("");
        System.out.println("----------------------------------------------------------------");
        System.out.println("Total Harga sebelum Diurutkan :");
        for(int i=0; i < data.length; i++){
            for(int j=i+1; j < data.length; j++){
                if (data[i].total>data[j].total){
                    double temp = data[i].total;
                    data[i].total=data[j].total;
                    data[j].total=temp;
                }
            }
        }
        for(int i = 0; i < data.length; i++){
            System.out.println(data[i].total);
        }
    }
    @Override
    public void searching(){
        Scanner caridata = new Scanner(System.in);
        System.out.println("Masukkan ID buku :");
        int cari = caridata.nextInt();
        
        boolean ketemu=false;
        int i=0;
        int posisi =0;
        
        while(!ketemu && i<data.length){
            if(data[i].ID_beli==cari){
                posisi = i+1;
                ketemu=true;
                break;
            }
            i++;
        }
         if(ketemu){
            System.out.println("");
            System.out.println("Data ada di baris : "+ posisi);
            System.out.println("-----------------------------------------------------------------------");
            System.out.format("%-10s","ID_beli");
            System.out.format("%-10s","Nama_Buku ");
            System.out.format("%-10s","Harga_Buku1 ");
            System.out.format("%-10s","Nama_Buku2 ");
            System.out.format("%-10s","Harga_Buku2 ");
            System.out.format("%-10s","Diskon");
            System.out.format("%-10s","Total");
            System.out.format("%-10s","Bonus");
            System.out.println("");
            System.out.println("-----------------------------------------------------------------------");
            System.out.println("");
            System.out.format("%-10s",data[i].ID_beli);
            System.out.format("%-10s",data[i].nama);
            System.out.format("%-10s",data[i].hargaBuku1);
            System.out.format("%-10s",data[i].nama);
            System.out.format("%-10s",data[i].hargaBuku2);
            System.out.format("%-10s",data[i].diskon);
            System.out.format("%-10s",data[i].total);
            System.out.format("%-10s",data[i].bonus);
            System.out.println("");
        }else {
             System.out.println("Data tidak ketemu");
         }
    }    
}


