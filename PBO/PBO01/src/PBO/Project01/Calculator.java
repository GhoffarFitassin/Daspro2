package PBO.Project01;


import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author kb-tech
 */
public class Calculator {
    static String konfi;
    static int konf;

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
          
        System.out.println("================");
        System.out.println("Calculator");
        System.out.println("================");
        do{
            menu();
        }while(!"tidak".equals(konfi) && !"Tidak".equals(konfi));
    }
    public static void menu(){
       
        Scanner input = new Scanner(System.in);
        
        System.out.println("Fitur Calculator");
        System.out.println("1. Perkalian");
        System.out.println("2. Pembagian");
        System.out.println("3. Penjumlahan");
        System.out.println("4. Pengurangan");
        System.out.println("5. Luas Persegi Panjang");
        System.out.println("6. Volume Kubus");
        System.out.println("7. Keliling Segitiga");
        System.out.println("8. Tidak Jadi");
        System.out.println("---------------");
        System.out.println("Pilih Menu : ");
        konf = input.nextInt();
        System.out.println("---------------");
        if(konf <=5){
                System.out.println("Masukkan Angka Pertama :");
                int a = input.nextInt();
                System.out.println("");
                System.out.println("Masukkan Angka Kedua");
                int b = input.nextInt();
        switch (konf){
            case 1 : System.out.println("Hasil Perkalian : "+ (a*b));
            break;
            case 2 : System.out.println("Hasil Pembagian : "+ (a/b));
            break;
            case 3 : System.out.println("Hasil Penjumlahan : "+ (a+b));
            break;
            case 4 : System.out.println("Hasil Pengurangan : "+ (a-b));
            break;
            case 5 : System.out.println("Hasil Luas Persegi Panjang : "+ (a*b));
            break;
            }
        }else{
            switch(konf){
            case 6 :{ 
                System.out.println("Masukkan Sisi Kubus : ");
                int a = input.nextInt();
                System.out.println("---------------");
                System.out.println("Hasil Volume Kubus : "+ (3*a));
                break;
            }
            case 7 : {
                System.out.println("Pilih Jenis Segitiga : ");
                System.out.println("1. Segitiga Sembarang");
                System.out.println("2. Segitiga Sama Kaki");
                System.out.println("3. Segitiga Sama sisi");
                System.out.println("---------------------");
                int pil = input.nextInt();
            switch (pil) {
                case 1 : {
                    System.out.println("Masukkan Sisi 1 :");
                    int a = input.nextInt();
                    System.out.println("Masukkan Sisi 2 :");
                    int b = input.nextInt();
                    System.out.println("masukkan Sisi 3 :");
                    int c = input.nextInt();
                    System.out.println("==================");
                    System.out.println("Hasil Keliling Segitiga Sembarang : "+ (a+b+c));
                    break;
                }
                case 2 :{
                    System.out.println("Masukkan Sisi Yang Sama (kaki) :");
                    int a = input.nextInt();
                    System.out.println("Masukkan Sisi Alas :");
                    int b = input.nextInt();
                    System.out.println("--------------------");
                    System.out.println("Hasil Keliling Segitiga Sama Kaki :"+ (2*a+b));
                    break;
                }
                case 3 :{
                    System.out.println("Masukkan Sisi Segitiga :");
                    int a = input.nextInt();
                    System.out.println("------------------------");
                    System.out.println("Hasil Keliling Segitiga Sama Sisi :"+ (3+a));
                    break;
                }
            }   
                }
            case 8 :{
                System.exit(0);
            }
            }
            
        }
        try{
            System.out.println("------------------");
            System.out.println("Ingin Menghitung Lagi?// Ya/Tidak");
        konfi = input.next();
        }catch(Exception e){
            System.out.println("Harus Angka Kaka!!");
        }
    }
    
}

