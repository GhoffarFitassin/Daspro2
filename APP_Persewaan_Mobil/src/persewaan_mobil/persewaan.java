/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package persewaan_mobil;

/**
 *
 * @author JAG
 */
public class persewaan extends datamobil{
    public String noTransaksi;
    public String tgl_Transaksi;
    public String noKTP;
    public String noHP;
    public String namaPelanggan;
    public String tgl_pinjam;
    public String tgl_kembali;
    public long uang_muka;
    public long totalTagihan;
    public long biayaTambahan;
    
    public void setdatasewa(String notransaksi, String tgltransaksi, String noktp,
            String nohp, String namapelanggan, String tglpinjam, String tglkembali, 
            long uangmuka, long biayatambahan){
        this.noTransaksi = notransaksi;
        this.tgl_Transaksi = tgltransaksi;
        this.noHP = nohp;
        this.noKTP = noktp;
        this.namaPelanggan = namapelanggan;
        this.tgl_pinjam = tglpinjam;
        this.tgl_kembali = tglkembali;
        this.uang_muka = uangmuka;
        this.biayaTambahan = biayatambahan;
                
    }
    
    public String getNoTransaksi(){
        return noTransaksi;
    }
    
    public String getTgl_Transaksi(){
        return tgl_Transaksi;
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
    
    public String getTgl_pinjam(){
        return tgl_pinjam;
    }
    
    public String getTgl_kembali(){
        return tgl_kembali;
    }
    
    public long getUang_muka(){
        return uang_muka;
    }
    
    public long getTotalTagihan(){
        return totalTagihan;
    }
    
    public long getBiayaTambahan(){
        return biayaTambahan;
    }
    
}
