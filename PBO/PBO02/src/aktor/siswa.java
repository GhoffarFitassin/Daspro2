/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aktor;

import Interface.pengelola;
import java.util.Scanner;

public class siswa extends aktor implements pengelola{
    
    private int NIS;
    private int nilUTS;
    private int nilUAS;
    private double nilAkhir;
    private String nilHuruf;
    private final double bbtUTS = 0.4;
    private final double bbtUAS = 0.6;
    double rata;
    siswa [] data = new siswa[3];
    /**
     * @param NIS
     * @param nama
     * @param nilUTS
     * @param nilUAS
     */
    public void setDataSiswa(int NIS, String nama, int nilUTS, int nilUAS){
        this.NIS=NIS;
        this.nama=nama;
        this.nilUTS=nilUTS;
        this.nilUAS=nilUAS;
 
    }
    /**
    *
    */
    public void setDataSiswa(){
        
        try{
            Scanner input = new Scanner(System.in);
            for ( int i = 0; i < data.length ; i++){
                data [i]=new siswa();
                System.out.println("Data Siswa ke-"+ (i+1));
                System.out.println("NIS : ");
                data [i].NIS=input.nextInt();
                System.out.println("Nama :");
                data [i].nama=input.next();
                System.out.println("Nilai UTS :");
                data [i].nilUTS=input.nextInt();
                System.out.println("Nilai UAS :");
                data [i].nilUAS=input.nextInt();
                System.out.println("");
                System.out.println("");
            
            }
        }catch (Exception e){
            System.out.println("Input salah");
        }
        hitungnilAkhir();
        hitungnilHuruf();
        hitungrata();
        
        
    }
    
    public void hitungnilAkhir(){
        for (int i = 0; i < data.length; i++){
            data[i].nilAkhir=(data[i].nilUTS+bbtUTS)+(data[i].nilUAS+bbtUAS);
        }
    }
    
    public double getnilAkhir(){
        return nilAkhir;
    }
    
    @Override
    public void infoaktor(){
        for (int i = 0; i < data.length; i++){
            System.out.format("%-10s",data[i].NIS);
            System.out.format("%-10s",data[i].nama);
            System.out.format("%-10s",data[i].nilUTS);
            System.out.format("%-10s",data[i].nilUAS);
            System.out.format("%-10s",data[i].nilAkhir);
            System.out.format("%-10s",data[i].nilHuruf);
            System.out.println("");
        }
        System.out.println("---------------------------------------");
        System.out.println("RATA-RATA :");
        
    }
    
    @Override
    public double hitungrata(){
        for (int i = 0; i < data.length; i++){
            rata=rata+data[i].nilAkhir;
        }
        rata=rata/data.length;
        return rata;
    }
    public String hitungnilHuruf(){
        for (int i = 0; i < data.length; i++){
            if (data[i].nilAkhir>=90){
                data[i].nilHuruf="A";
            }else if (data[i].nilAkhir>=75){
                data[i].nilHuruf="B";
            }else if (data[i].nilAkhir>=60){
                data[i].nilHuruf="C";
            }else {
                data[i].nilHuruf="D";
            }
        }
        return nilHuruf;
    }

    @Override
    public void sorting(){
        System.out.println("");
        System.out.println("Nilai Sebelum Diurutkan :");
        for (int i = 0; i < data.length; i++){
            System.out.println(data[i].nilAkhir);
        }
        System.out.println("");
        System.out.println("--------------------------------------");
        System.out.println("Nilai setelah diurutkan :");
        for (int i = 0; i < data.length; i++){
            for (int j = i+1; j < data.length; j++){
                if (data[i].nilAkhir>data[j].nilAkhir){
                    double temp = data[i].nilAkhir;
                    data[i].nilAkhir=data[j].nilAkhir;
                    data[j].nilAkhir=temp;
                }
            }
        }
            for (int i = 0; i < data.length; i++){
                System.out.println(data[i].nilAkhir);
            }
    }
    
    @Override
    public void searching(){
        Scanner caridata = new Scanner(System.in);
        System.out.println("Masukkan NIS : ");
        int cari = caridata.nextInt();
        
        boolean ketemu=false;
        int i = 0;
        int posisi = 0;
        
        while (!ketemu && i<data.length){
            if(data[i].NIS==cari){
                posisi = i+1;
                ketemu=true;
                break;
                
            }
            i++;
        }
        if (ketemu){
            System.out.println("");
            System.out.println("Data ada di baris : "+posisi);
            System.out.println("------------------------------------------------");
            System.out.format("%-10s","NIS");
            System.out.format("%-10s","Nama");
            System.out.format("%-10s","UTS");
            System.out.format("%-10s","UAS");
            System.out.format("%-10s","Total");
            System.out.format("%-10s","Grade");
            System.out.println("");
            System.out.println("------------------------------------------------");
            System.out.println("");
            System.out.format("%-10s",data[i].NIS);
            System.out.format("%-10s",data[i].nama);
            System.out.format("%-10s",data[i].nilUTS);
            System.out.format("%-10s",data[i].nilUAS);
            System.out.format("%-10s",data[i].nilAkhir);
            System.out.format("%-10s",data[i].nilHuruf);
            System.out.println("");
            } else {
                System.out.println("Data tidak ketemu !");
        }
    }
}
