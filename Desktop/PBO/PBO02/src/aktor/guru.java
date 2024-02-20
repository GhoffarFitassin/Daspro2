/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aktor;



public class guru extends aktor {
    private int nip;
    private String kelas;
    private String namamapel;
    
    public void setdataguru(String nama, int nip, String kelas, String namamapel){
        this.nama=nama;
        this.nip=nip;
        this.kelas=kelas;
        this.namamapel=namamapel;
    }
    
    @Override
    public void infoaktor(){
        System.out.format("%-10s",nama);
        System.out.format("%-10s",nip);
        System.out.format("%-10s",kelas);
        System.out.format("%-10s",namamapel);
    }
    
    public String getnamamapel(){
        return namamapel;
    }
    
    public String getnamakelas(){
        return kelas;
    }
}
