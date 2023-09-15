/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reservasi_hotel;

/**
 *
 * @author JAG
 */
public class Transaksi implements DataKamar {

    /**
     * @param args the command line arguments
     */
    public String noTransaksi;
    public String tgl_Reservasi;
    public String noKTP;
    public String noHP;
    public String namaPelanggan;
    public String cekIN;
    public String cekOUT;
    public long Deposit;
    public long totalTagihan;
    public long biayaTambahan;
    
    public void setdatasewa(String notransaksi, String tglreservasi, String noktp,
            String nohp, String namapelanggan, String cekin, String cekout, 
            long deposit, long biayatambahan){
        this.noTransaksi = notransaksi;
        this.tgl_Reservasi = tglreservasi;
        this.noHP = nohp;
        this.noKTP = noktp;
        this.namaPelanggan = namapelanggan;
        this.cekIN = cekin;
        this.cekOUT = cekOUT;
        this.Deposit = deposit;
        this.biayaTambahan = biayatambahan;
                
    }
    
    public String getNoTransaksi(){
        return noTransaksi;
    }
    
    public String getTgl_Reservasi(){
        return tgl_Reservasi;
    }
    
    public String getNoKTP(){
        return noKTP;
    }
    
    public String getNoHP(){
        return noHP;
    }
    
    public String getNamaPelanggan(){
        return namaPelanggan;
    }
    
    public String getCekIN(){
        return cekIN;
    }
    
    public String getCekOUT(){
        return cekOUT;
    }
    
    public long getDeposit(){
        return Deposit;
    }
    
    public long getTotalTagihan(){
        return totalTagihan;
    }
    
    public long getBiayaTambahan(){
        return biayaTambahan;
    }
    
}
