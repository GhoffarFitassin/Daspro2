/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package xampplogin;


import javax.swing.JOptionPane;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Connection;
/**
 *
 * @author JAG
 */
public class koneksidb {
    private Connection connection;
    private static koneksidb instance;
    
    public static koneksidb getInstance(){
        if(instance == null){
            instance = new koneksidb();
        }
        return instance;
    }
    
    public Connection getConnection(){
        return connection;
    }
    
    public void dbConnection() {
        try {
            if (connection == null)
            {
                connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/ghoffar_login","root","");
            System.out.println("Koneksi sukses");
            }
        } catch (SQLException se) {
            JOptionPane.showMessageDialog(null,"Koneksi gagall !" + se);
        }
         
    }
    public static void main(String[] kon) throws ClassNotFoundException {
        new koneksidb().dbConnection();
    }
 
    }
