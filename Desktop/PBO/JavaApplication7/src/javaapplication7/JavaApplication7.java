/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication7;

import java.util.Scanner;



/**
 *
 * @author kb-tech
 */
public class JavaApplication7 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        Scanner input = new Scanner(System.in);
        
        int a=3;
        
        switch (a){
            case 1 -> System.out.println("Nilai a = 1");
            case 2 -> System.out.println("Nilai a = 2");
            case 3 -> System.out.println("Nilai a = 3");
            default -> System.out.println("Nilai a = 4");
        
        }
    }
    
}
