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
public interface DataKamar {
    
    public class datakamar{
        public long NoKamar;
        public String tipeKamar;
        public String jenisKamar;
        public long tarif;
   
    public void setdatamobil(long nokamar, String tipekamar, String jeniskamar, long tarif){
        this.NoKamar = nokamar;
        this.tipeKamar = tipekamar;
        this.jenisKamar = jeniskamar;
        this.tarif = tarif;
    }
    
    public long getNo_Kamar(){
        return NoKamar;
    }
    
    public String getTipeKamar(){
        return tipeKamar;
    }
    
    public String getJenisKamar(){
        return jenisKamar;
    }
    
    public long getTarif(){
        return tarif;
    }
        
    }
    
}
