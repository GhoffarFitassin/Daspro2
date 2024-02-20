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
public class datamobil {
    public long id_mobil;
    public String namaMobil;
    public String jenisMobil;
    public long tarif;
    
    
    /**
     * @param args the command line arguments
     */
    
    public void setdatamobil(long idmobil, String namamobil, String jenismobil, long tarif){
        this.id_mobil = idmobil;
        this.namaMobil = namamobil;
        this.jenisMobil = jenismobil;
        this.tarif = tarif;
    }
    
    public long getId_mobil(){
        return id_mobil;
    }
    
    public String getNamaMobil(){
        return namaMobil;
    }
    
    public String getJenisMobil(){
        return jenisMobil;
    }
    
    public long getTarif(){
        return tarif;
    }
}
