/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package reservasi_hotel;

import java.awt.HeadlessException;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.concurrent.TimeUnit;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author JAG
 */
public class app_reservasi extends javax.swing.JFrame {

    private koneksidb masuk = koneksidb.getinstance();
    
    private final preview view = new preview();
    
    private void load_data(){
    
        masuk.dbConnection();
        
        DefaultTableModel model = new DefaultTableModel();
        
        model.addColumn("No.");
        model.addColumn("Nama Pelanggan");
        model.addColumn("No. Tansaksi");
        model.addColumn("No. Kamar");
        model.addColumn("Tipe Kamar");
        model.addColumn("Jenis Kamar");
        model.addColumn("Tarif");
        
//        String cari = TXTsearch.getText();
        
        try
        {
            int no = 1;
            String sql = "SELECT transaksi.nama_Pelanggan, kamar.no_Transaksi, kamar.no_Kamar, kamar.tipe_Kamar, kamar.jenis_Kamar, kamar.Tarif"
                    + " FROM transaksi JOIN kamar ON kamar.no_Transaksi=transaksi.no_Transaksi";
            java.sql.Statement stats1 = masuk.getConnection().createStatement();
            java.sql.ResultSet res = stats1.executeQuery(sql);
            
            while(res.next()){
                model.addRow(new Object[]{
                no++,
                res.getString(1),
                res.getString(2),
                res.getString(3),
                res.getString(4),
                res.getString(5),
                res.getString(6),
                });
                
                Tborder2.setModel(model);
            }
            
        } catch (Exception e)
        {
            System.out.println("ERROR :"+e.getMessage());
        }
        
    }

    private void load_order(){
    
        masuk.dbConnection();
        
        DefaultTableModel model = new DefaultTableModel();
        
        model.addColumn("NO");
        model.addColumn("No. Transaksi");
        model.addColumn("Tgl. Reservasi");
        model.addColumn("No. KTP");
        model.addColumn("NO. HP");
        model.addColumn("Nama Pelanggan");
        model.addColumn("Cek IN");
        model.addColumn("Cek OUT");
        model.addColumn("Deposit");
        model.addColumn("Biaya Tambahan");
        model.addColumn("Total Tagihan");
        
//        String cari = TXTsearch.getText();
        
        try
        {
            int no = 1;
            String sql = "SELECT * FROM transaksi ";
            java.sql.Statement stats2 = masuk.getConnection().createStatement();
            java.sql.ResultSet res = stats2.executeQuery(sql);
            
            while(res.next()){
                model.addRow(new Object[]{
                no++,
                res.getString(1),
                res.getString(2),
                res.getString(4),
                res.getString(5),
                res.getString(3),
                res.getString(6),
                res.getString(7),
                res.getString(8),
                res.getString(9),
                res.getString(10),
                });
                
                Tborder1.setModel(model);
            }
            
        } catch (Exception e)
        {
            System.out.println("ERROR :"+e.getMessage());
        }
        
    }
    
    
    
    private void clear() {
        TXTtrans.setText("");
        DATEreser.setDate(null);
        TXTktp.setText("");
        TXThp.setText("");
        TXTname.setText("");
        DATEin.setDate(null);
        DATEout.setDate(null);
        TXTdp.setText("");
        TXTtambah.setText("");
        TXTtotal.setText("");
        TXTtrans.requestFocus();
    }
    
    private class dataTransaksi{
        DateFormat date = new SimpleDateFormat("dd-MM-yyy");
        String no_transaksi = TXTtrans.getText();
        String tgl_reservasi = String.valueOf(date.format(DATEreser.getDate()));
        String no_ktp = TXTktp.getText();
        String no_hp = TXThp.getText();
        String name = TXTname.getText();
        String cek_in = String.valueOf(date.format(DATEin.getDate()));
        String cek_out = String.valueOf(date.format(DATEout.getDate()));
        long deposit = Long.valueOf(TXTdp.getText());
        long biaya_tambahan = Long.valueOf(TXTtambah.getText());
        String total_tagihan = TXTtotal.getText();
    }
    /**
     * Creates new form app_reservasi
     */
    public app_reservasi() {
        initComponents();
        setLocationRelativeTo(this);
        load_data();
        load_order();
        clear();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        bodyPanel = new javax.swing.JPanel();
        sidePanel = new javax.swing.JPanel();
        btnDashboard = new javax.swing.JButton();
        btnTransaksi = new javax.swing.JButton();
        btnKeluar = new javax.swing.JButton();
        titlePanel = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        mainPanel = new javax.swing.JPanel();
        homeP = new javax.swing.JPanel();
        jPanel2 = new javax.swing.JPanel();
        jLabel16 = new javax.swing.JLabel();
        jLabel17 = new javax.swing.JLabel();
        jLabel18 = new javax.swing.JLabel();
        jScrollPane4 = new javax.swing.JScrollPane();
        Tborder1 = new javax.swing.JTable();
        jLabel19 = new javax.swing.JLabel();
        jScrollPane5 = new javax.swing.JScrollPane();
        Tborder2 = new javax.swing.JTable();
        formTransaksi = new javax.swing.JPanel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        jLabel8 = new javax.swing.JLabel();
        jLabel9 = new javax.swing.JLabel();
        jLabel10 = new javax.swing.JLabel();
        jLabel11 = new javax.swing.JLabel();
        TXTtrans = new javax.swing.JTextField();
        DATEreser = new com.toedter.calendar.JDateChooser();
        TXTktp = new javax.swing.JTextField();
        TXThp = new javax.swing.JTextField();
        TXTname = new javax.swing.JTextField();
        DATEin = new com.toedter.calendar.JDateChooser();
        DATEout = new com.toedter.calendar.JDateChooser();
        TXTdp = new javax.swing.JTextField();
        TXTtambah = new javax.swing.JTextField();
        TXTtotal = new javax.swing.JTextField();
        jScrollPane2 = new javax.swing.JScrollPane();
        Tbkamar = new javax.swing.JTable();
        jLabel20 = new javax.swing.JLabel();
        jLabel21 = new javax.swing.JLabel();
        jLabel22 = new javax.swing.JLabel();
        jLabel23 = new javax.swing.JLabel();
        InputKamar = new javax.swing.JButton();
        btnCancel = new javax.swing.JButton();
        btnPrint = new javax.swing.JButton();
        btnInput = new javax.swing.JToggleButton();
        jLabel12 = new javax.swing.JLabel();
        CBjkamar = new javax.swing.JComboBox<>();
        CBtkamar = new javax.swing.JComboBox<>();
        TXTkamar = new javax.swing.JTextField();
        TXTtarif = new javax.swing.JTextField();
        TXTtran = new javax.swing.JTextField();

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 100, Short.MAX_VALUE)
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 100, Short.MAX_VALUE)
        );

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        bodyPanel.setBackground(new java.awt.Color(8, 32, 50));

        sidePanel.setBackground(new java.awt.Color(4, 41, 58));
        sidePanel.setBorder(javax.swing.BorderFactory.createBevelBorder(javax.swing.border.BevelBorder.RAISED, java.awt.Color.lightGray, java.awt.Color.lightGray, java.awt.Color.lightGray, java.awt.Color.lightGray));

        btnDashboard.setBackground(new java.awt.Color(4, 41, 58));
        btnDashboard.setFont(new java.awt.Font("Dialog", 1, 12)); // NOI18N
        btnDashboard.setForeground(new java.awt.Color(216, 216, 216));
        btnDashboard.setText("DASHBOARD");
        btnDashboard.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnDashboardActionPerformed(evt);
            }
        });

        btnTransaksi.setBackground(new java.awt.Color(4, 41, 58));
        btnTransaksi.setFont(new java.awt.Font("Dialog", 1, 12)); // NOI18N
        btnTransaksi.setForeground(new java.awt.Color(216, 216, 216));
        btnTransaksi.setText("TRANSAKSI");
        btnTransaksi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnTransaksiActionPerformed(evt);
            }
        });

        btnKeluar.setBackground(new java.awt.Color(4, 41, 58));
        btnKeluar.setFont(new java.awt.Font("Dialog", 1, 12)); // NOI18N
        btnKeluar.setForeground(new java.awt.Color(216, 216, 216));
        btnKeluar.setIcon(new javax.swing.ImageIcon(getClass().getResource("/img_icon/log_out_icon_16.png"))); // NOI18N
        btnKeluar.setText("KELUAR");
        btnKeluar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnKeluarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout sidePanelLayout = new javax.swing.GroupLayout(sidePanel);
        sidePanel.setLayout(sidePanelLayout);
        sidePanelLayout.setHorizontalGroup(
            sidePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(sidePanelLayout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGroup(sidePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(btnTransaksi, javax.swing.GroupLayout.DEFAULT_SIZE, 116, Short.MAX_VALUE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, sidePanelLayout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addComponent(btnKeluar)
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addComponent(btnDashboard, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        sidePanelLayout.setVerticalGroup(
            sidePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(sidePanelLayout.createSequentialGroup()
                .addGap(39, 39, 39)
                .addComponent(btnDashboard)
                .addGap(18, 18, 18)
                .addComponent(btnTransaksi)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnKeluar)
                .addContainerGap())
        );

        titlePanel.setBackground(new java.awt.Color(0, 18, 51));
        titlePanel.setBorder(javax.swing.BorderFactory.createBevelBorder(javax.swing.border.BevelBorder.RAISED, java.awt.Color.lightGray, java.awt.Color.lightGray, java.awt.Color.lightGray, java.awt.Color.lightGray));

        jLabel1.setBackground(new java.awt.Color(216, 216, 216));
        jLabel1.setFont(new java.awt.Font("Gadugi", 1, 36)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(216, 216, 216));
        jLabel1.setText("OTTOMAN HOTEL");
        jLabel1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jLabel1MouseClicked(evt);
            }
        });

        javax.swing.GroupLayout titlePanelLayout = new javax.swing.GroupLayout(titlePanel);
        titlePanel.setLayout(titlePanelLayout);
        titlePanelLayout.setHorizontalGroup(
            titlePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, titlePanelLayout.createSequentialGroup()
                .addContainerGap(265, Short.MAX_VALUE)
                .addComponent(jLabel1)
                .addContainerGap(246, Short.MAX_VALUE))
        );
        titlePanelLayout.setVerticalGroup(
            titlePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(titlePanelLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel1)
                .addContainerGap())
        );

        mainPanel.setBackground(new java.awt.Color(40, 42, 58));
        mainPanel.setBorder(javax.swing.BorderFactory.createBevelBorder(javax.swing.border.BevelBorder.RAISED, java.awt.Color.lightGray, java.awt.Color.lightGray, java.awt.Color.lightGray, java.awt.Color.lightGray));
        mainPanel.setLayout(new java.awt.CardLayout());

        homeP.setBackground(new java.awt.Color(30, 30, 42));

        jPanel2.setBackground(new java.awt.Color(24, 33, 45));

        jLabel16.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel16.setIcon(new javax.swing.ImageIcon(getClass().getResource("/img_icon/zyro-icon64-smk.png"))); // NOI18N

        jLabel18.setBackground(new java.awt.Color(216, 216, 216));
        jLabel18.setFont(new java.awt.Font("Gadugi", 1, 36)); // NOI18N
        jLabel18.setForeground(new java.awt.Color(216, 216, 216));
        jLabel18.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel18.setText("DASHBOARD");

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel16)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabel17)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 147, Short.MAX_VALUE)
                .addComponent(jLabel18)
                .addContainerGap(216, Short.MAX_VALUE))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jLabel18, javax.swing.GroupLayout.PREFERRED_SIZE, 63, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                            .addComponent(jLabel17)
                            .addGap(33, 33, 33))
                        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                            .addComponent(jLabel16)
                            .addContainerGap()))))
        );

        Tborder1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {

            }
        ));
        Tborder1.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                Tborder1MouseClicked(evt);
            }
        });
        jScrollPane4.setViewportView(Tborder1);

        jLabel19.setBackground(new java.awt.Color(216, 216, 216));
        jLabel19.setFont(new java.awt.Font("Gadugi", 1, 18)); // NOI18N
        jLabel19.setForeground(new java.awt.Color(216, 216, 216));
        jLabel19.setText("Data Reservasi");
        jLabel19.setToolTipText("");

        Tborder2.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {},
                {},
                {},
                {}
            },
            new String [] {

            }
        ));
        jScrollPane5.setViewportView(Tborder2);

        javax.swing.GroupLayout homePLayout = new javax.swing.GroupLayout(homeP);
        homeP.setLayout(homePLayout);
        homePLayout.setHorizontalGroup(
            homePLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addGroup(homePLayout.createSequentialGroup()
                .addGroup(homePLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(homePLayout.createSequentialGroup()
                        .addGap(268, 268, 268)
                        .addComponent(jLabel19)
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addGroup(homePLayout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(jScrollPane4)))
                .addContainerGap())
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, homePLayout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(jScrollPane5, javax.swing.GroupLayout.PREFERRED_SIZE, 475, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        homePLayout.setVerticalGroup(
            homePLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(homePLayout.createSequentialGroup()
                .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(jLabel19)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jScrollPane4, javax.swing.GroupLayout.PREFERRED_SIZE, 159, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jScrollPane5, javax.swing.GroupLayout.PREFERRED_SIZE, 139, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );

        mainPanel.add(homeP, "card4");

        formTransaksi.setBackground(new java.awt.Color(51, 71, 86));

        jLabel2.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(216, 216, 216));
        jLabel2.setText("No. Transaksi");

        jLabel3.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel3.setForeground(new java.awt.Color(216, 216, 216));
        jLabel3.setText("Tgl. Reservasi");

        jLabel4.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel4.setForeground(new java.awt.Color(216, 216, 216));
        jLabel4.setText("No KTP");

        jLabel5.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel5.setForeground(new java.awt.Color(216, 216, 216));
        jLabel5.setText("No HP");

        jLabel6.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel6.setForeground(new java.awt.Color(216, 216, 216));
        jLabel6.setText("Nama Pelanggan");

        jLabel7.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel7.setForeground(new java.awt.Color(216, 216, 216));
        jLabel7.setText("Cek IN");

        jLabel8.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel8.setForeground(new java.awt.Color(216, 216, 216));
        jLabel8.setText("Cek OUT");

        jLabel9.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel9.setForeground(new java.awt.Color(216, 216, 216));
        jLabel9.setText("Deposit");

        jLabel10.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel10.setForeground(new java.awt.Color(216, 216, 216));
        jLabel10.setText("Biaya Tambahan");

        jLabel11.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel11.setForeground(new java.awt.Color(216, 216, 216));
        jLabel11.setText("Total Tagihan");

        TXTtrans.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTtransKeyTyped(evt);
            }
        });

        DATEreser.setDateFormatString("dd MMMM y");

        TXTktp.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTktpKeyTyped(evt);
            }
        });

        TXThp.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXThpKeyTyped(evt);
            }
        });

        TXTname.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTnameKeyTyped(evt);
            }
        });

        DATEin.setDateFormatString("dd MMMM y");

        DATEout.setDateFormatString("dd MMMM y");

        TXTdp.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTdpKeyTyped(evt);
            }
        });

        TXTtambah.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTtambahKeyTyped(evt);
            }
        });

        TXTtotal.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                TXTtotalMouseClicked(evt);
            }
        });
        TXTtotal.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTtotalKeyTyped(evt);
            }
        });

        Tbkamar.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "NO", "No. Transaksi", "No. Kamar", "Tipe Kamar", "Jenis Kamar", "Tarif"
            }
        ));
        jScrollPane2.setViewportView(Tbkamar);

        jLabel20.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel20.setForeground(new java.awt.Color(216, 216, 216));
        jLabel20.setText("No. Kamar");

        jLabel21.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel21.setForeground(new java.awt.Color(216, 216, 216));
        jLabel21.setText("Tipe Kamar");

        jLabel22.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel22.setForeground(new java.awt.Color(216, 216, 216));
        jLabel22.setText("Jenis Kamar");

        jLabel23.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel23.setForeground(new java.awt.Color(216, 216, 216));
        jLabel23.setText("Tarif");

        InputKamar.setText("INPUT");
        InputKamar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                InputKamarActionPerformed(evt);
            }
        });

        btnCancel.setText("CANCEL");
        btnCancel.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnCancelActionPerformed(evt);
            }
        });

        btnPrint.setText("PRINT");
        btnPrint.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPrintActionPerformed(evt);
            }
        });

        btnInput.setText("INPUT");
        btnInput.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnInputActionPerformed(evt);
            }
        });

        jLabel12.setFont(new java.awt.Font("Dialog", 0, 12)); // NOI18N
        jLabel12.setForeground(new java.awt.Color(216, 216, 216));
        jLabel12.setText("No. Transaksi");

        CBjkamar.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "VIP", "VVIP", "Luxury" }));

        CBtkamar.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Single", "Double" }));

        TXTkamar.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTkamarKeyTyped(evt);
            }
        });

        TXTtarif.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTtarifKeyTyped(evt);
            }
        });

        TXTtran.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyTyped(java.awt.event.KeyEvent evt) {
                TXTtranKeyTyped(evt);
            }
        });

        javax.swing.GroupLayout formTransaksiLayout = new javax.swing.GroupLayout(formTransaksi);
        formTransaksi.setLayout(formTransaksiLayout);
        formTransaksiLayout.setHorizontalGroup(
            formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(formTransaksiLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addGroup(formTransaksiLayout.createSequentialGroup()
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel6)
                            .addComponent(jLabel7)
                            .addComponent(jLabel8)
                            .addComponent(jLabel9)
                            .addComponent(jLabel10)
                            .addComponent(jLabel11)
                            .addComponent(jLabel5)
                            .addComponent(jLabel4)
                            .addComponent(jLabel3)
                            .addComponent(jLabel2))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(TXTtambah, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(TXTdp, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(DATEout, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, 149, Short.MAX_VALUE)
                            .addComponent(DATEin, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(TXThp, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(TXTktp, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(DATEreser, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(TXTtrans, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(TXTname)
                            .addComponent(TXTtotal)))
                    .addComponent(btnInput))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(formTransaksiLayout.createSequentialGroup()
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel22)
                            .addComponent(jLabel23)
                            .addComponent(jLabel21)
                            .addComponent(jLabel20)
                            .addComponent(jLabel12))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(CBjkamar, 0, 150, Short.MAX_VALUE)
                            .addComponent(CBtkamar, javax.swing.GroupLayout.Alignment.LEADING, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(TXTtran, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, 150, Short.MAX_VALUE)
                            .addComponent(TXTkamar, javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(TXTtarif))
                        .addGap(18, 18, 18)
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(btnCancel, javax.swing.GroupLayout.DEFAULT_SIZE, 102, Short.MAX_VALUE)
                            .addComponent(InputKamar, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                    .addComponent(btnPrint, javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jScrollPane2, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 0, Short.MAX_VALUE))
                .addContainerGap())
        );
        formTransaksiLayout.setVerticalGroup(
            formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(formTransaksiLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel2)
                    .addComponent(TXTtrans, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(InputKamar)
                    .addComponent(jLabel12)
                    .addComponent(TXTtran, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(jLabel3)
                        .addComponent(btnCancel)
                        .addComponent(jLabel20)
                        .addComponent(TXTkamar, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(DATEreser, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel4)
                    .addComponent(TXTktp, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel21)
                    .addComponent(CBtkamar, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel5)
                    .addComponent(TXThp, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel22)
                    .addComponent(CBjkamar, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel6)
                    .addComponent(TXTname, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel23)
                    .addComponent(TXTtarif, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(formTransaksiLayout.createSequentialGroup()
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(DATEin, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel7))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(jLabel8)
                            .addComponent(DATEout, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel9)
                            .addComponent(TXTdp, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel10)
                            .addComponent(TXTtambah, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(jLabel11)
                            .addComponent(TXTtotal, javax.swing.GroupLayout.PREFERRED_SIZE, 25, javax.swing.GroupLayout.PREFERRED_SIZE)))
                    .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 0, Short.MAX_VALUE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(formTransaksiLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(btnInput)
                    .addComponent(btnPrint))
                .addGap(18, 18, 18))
        );

        mainPanel.add(formTransaksi, "card4");

        javax.swing.GroupLayout bodyPanelLayout = new javax.swing.GroupLayout(bodyPanel);
        bodyPanel.setLayout(bodyPanelLayout);
        bodyPanelLayout.setHorizontalGroup(
            bodyPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(bodyPanelLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(bodyPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(bodyPanelLayout.createSequentialGroup()
                        .addComponent(sidePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(mainPanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                    .addComponent(titlePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap())
        );
        bodyPanelLayout.setVerticalGroup(
            bodyPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(bodyPanelLayout.createSequentialGroup()
                .addContainerGap()
                .addComponent(titlePanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(bodyPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(sidePanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(mainPanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addContainerGap())
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(bodyPanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(bodyPanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnDashboardActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnDashboardActionPerformed
        //For Remove Panel
        mainPanel.removeAll();
        mainPanel.repaint();
        mainPanel.revalidate();
        
        //For Get Panel
        mainPanel.add(homeP);
        mainPanel.repaint();
        mainPanel.revalidate();
        load_data();
        load_order();
    }//GEN-LAST:event_btnDashboardActionPerformed

    private void btnTransaksiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnTransaksiActionPerformed
        //For Remove Panel
        mainPanel.removeAll();
        mainPanel.repaint();
        mainPanel.revalidate();
        
        //For Get Panel
        mainPanel.add(formTransaksi);
        mainPanel.repaint();
        mainPanel.revalidate();
        load_data();
        load_order();
    }//GEN-LAST:event_btnTransaksiActionPerformed

    private void jLabel1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jLabel1MouseClicked
        mainPanel.removeAll();
        mainPanel.repaint();
        mainPanel.revalidate();
        
        //For Get Panel
        mainPanel.add(homeP);
        mainPanel.repaint();
        mainPanel.revalidate();
        load_order();
        load_data();
    }//GEN-LAST:event_jLabel1MouseClicked

    private void btnKeluarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnKeluarActionPerformed
        new halamanlogin().setVisible(true);
        this.dispose();
    }//GEN-LAST:event_btnKeluarActionPerformed

    private void Tborder1MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_Tborder1MouseClicked
        
    }//GEN-LAST:event_Tborder1MouseClicked

    private void btnInputActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnInputActionPerformed
        int Step=0;
        masuk.dbConnection();

        dataTransaksi DT = new dataTransaksi();
//        DateFormat date = new SimpleDateFormat("dd-mm-yyy");
        try
        {
            java.sql.Statement st = masuk.getConnection().createStatement();
            ResultSet dt = st.executeQuery("SELECT * FROM transaksi WHERE no_Transaksi = '" + DT.no_transaksi + "'");
            if (dt.next())
            {
                JOptionPane.showMessageDialog(null, "Nomor Transaksi Sudah Ada", "PERHATIAN", JOptionPane.WARNING_MESSAGE);
                TXTtrans.requestFocus();
            } else
            {
                Step=1;
                String sql = "INSERT INTO transaksi(no_Transaksi, tgl_Transaksi, nama_Pelanggan, no_KTP, no_HP, cek_IN, cek_OUT, Deposit, biaya_Tambahan, total_tagihan) VALUES('" + DT.no_transaksi + "'"+",'" + DT.tgl_reservasi + "'"+",'" + DT.name + "'"+",'" + DT.no_ktp + "'"+",'" + DT.no_hp + "'"+","
                + "'" + DT.cek_in + "'"+",'" + DT.cek_out + "'"+",'" + DT.deposit + "'"+",'" + DT.biaya_tambahan + "'"+",'" + DT.total_tagihan + "')";
                Step=2;
                st.execute(sql);
                Step=3;
                JOptionPane.showMessageDialog(null, "Data Berhasil Di Simpan", "SUKSES", JOptionPane.INFORMATION_MESSAGE);
                clear();

            }
        } catch (Exception e)
        {
            System.out.println("Error Step "+Step+" = "+e);
        }

        DefaultTableModel model = (DefaultTableModel)Tbkamar.getModel();

        try
        {
            java.sql.Statement stat = masuk.getConnection().createStatement();

            for (int i = 0; i < Tbkamar.getRowCount(); i++)
            {
                String nt = Tbkamar.getValueAt(i, 1).toString();
                String nk = Tbkamar.getValueAt(i, 2).toString();
                String tk = Tbkamar.getValueAt(i, 3).toString();
                String jk = Tbkamar.getValueAt(i, 4).toString();
                String tr = Tbkamar.getValueAt(i, 5).toString();

                String sql = "INSERT INTO kamar(no_Transaksi, no_Kamar, tipe_Kamar, jenis_Kamar, Tarif) VALUES('" + nt + "'" + ",'" + nk + "'" + ", '" + tk + "'" + ",'" + jk + "'" + ",'" + tr + "')";
                stat.execute(sql);
                
                JOptionPane.showMessageDialog(null, "Data Berhasil Di Simpan", "SUKSES", JOptionPane.INFORMATION_MESSAGE);

            }

            int[] rowsInserted = stat.executeBatch();
            System.out.println("Data Inserted");
            System.out.println("rowsInserted Count = " + rowsInserted.length);

            stat.close();
        } catch (Exception e)
        {
            System.out.println("Error Step "+Step+" = "+e);
        }

    }//GEN-LAST:event_btnInputActionPerformed

    private void btnPrintActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPrintActionPerformed
        dataTransaksi DT = new dataTransaksi();
        if (TXTtotal.getText().equals(""))
        {
            JOptionPane.showMessageDialog(null, "Masukkan transaksi lebih dahulu !");
        } else
        {
            preview view = new preview();
            view.show();
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("REKAPITULASI TRANSAKSI RENTAL HOTEL \n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("No. Transaksi  : \t"+DT.no_transaksi+"\n");
            view.TXTpreview.append("Tanggal Reservasi  : \t"+DT.tgl_reservasi+"\n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("Nama Pelanggan  : \t"+DT.name+"\n");
            view.TXTpreview.append("No. KTP  : \t\t"+DT.no_ktp+"\n");
            view.TXTpreview.append("No. HP  : \t\t"+DT.no_hp+"\n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("Cek IN  : \t\t"+DT.cek_in+"\n");
            view.TXTpreview.append("Cek OUT  : \t\t"+DT.cek_out+"\n");
            view.TXTpreview.append("Deposit  : \t\t"+DT.deposit+"\n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("DATA SEWA KAMAR \n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("No. Kamar\tTipe Kamar\tJenis Kamar\tTarif \n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            for (int i = 0; i < Tbkamar.getRowCount(); i++)
            {
                String a= Tbkamar.getValueAt(i, 2).toString()+"\t"
                        +Tbkamar.getValueAt(i, 3).toString()+"\t"
                        +Tbkamar.getValueAt(i, 4).toString()+"\t"
                        +Tbkamar.getValueAt(i, 5).toString()+"\t";
                view.TXTpreview.append(a);
                view.TXTpreview.append("\n");
            }
            view.TXTpreview.append("\n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");
            view.TXTpreview.append("\n");
            view.TXTpreview.append("Biaya Tambahan  : \t"+DT.biaya_tambahan+"\n");
            view.TXTpreview.append("TOTAL TAGIHAN  : \t"+TXTtotal.getText()+"\n");
            view.TXTpreview.append("-------------------------------------------------------------------------------------");

        }
    }//GEN-LAST:event_btnPrintActionPerformed

    private void btnCancelActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnCancelActionPerformed
        if (TXTtrans.getText().equals("")||DATEreser.getDate().equals("")||TXTktp.getText().equals("")||TXThp.getText().equals("")||
            TXTname.getText().equals("")||DATEin.getDate().equals("")||DATEout.getDate().equals("")||TXTdp.getText().equals("")||TXTtambah.getText().equals(""))
        {
            JOptionPane.showMessageDialog(null, "Transaksi Tidak Boleh Kosong", "PERHATIAN", JOptionPane.WARNING_MESSAGE);
            return;
        }

        DefaultTableModel model = (DefaultTableModel)Tbkamar.getModel();

        dataTransaksi DT = new dataTransaksi();
        DateFormat date = new SimpleDateFormat("dd-MM-yyy");
        try
        {
            int row = Tbkamar.getSelectedRow();
            if (row>=0)
            {
                int ok = JOptionPane.showConfirmDialog(null, "Yakin Mau Hapus?","Konfirmasi",JOptionPane.YES_NO_OPTION);
                if (ok==0)
                {
                    model.removeRow(row);
                    Date cekin= date.parse(DT.cek_in);
                    Date cekout= date.parse(DT.cek_out);

                    int lama= (int)TimeUnit.MILLISECONDS.toDays(cekout.getTime()-cekin.getTime());

                    if (lama<0)
                    {
                        JOptionPane.showMessageDialog(null, "Tanggal Salah!");
                    } else
                    {
                        int total=0;
                        for (int i = 0; i < Tbkamar.getRowCount(); i++)
                        {

                            int Tarif=Integer.parseInt(Tbkamar.getValueAt(i, 5).toString());
                            total= total+(Tarif*lama);
                        }
                        int totalakhir = (int) (total+DT.biaya_tambahan-DT.deposit);
                        TXTtotal.setText(""+totalakhir);
                    }
                }
            }

        } catch (Exception e)
        {
            System.out.println("asadd");
        }
    }//GEN-LAST:event_btnCancelActionPerformed

    private void InputKamarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_InputKamarActionPerformed
        int Step=0;
        if (TXTtrans.getText().equals("")||DATEreser.getDate().equals("")||TXTktp.getText().equals("")||TXThp.getText().equals("")||
            TXTname.getText().equals("")||DATEin.getDate().equals("")||DATEout.getDate().equals("")||TXTdp.getText().equals("")||TXTtambah.getText().equals(""))
        {
            JOptionPane.showMessageDialog(null, "Transaksi Tidak Boleh Kosong", "PERHATIAN", JOptionPane.WARNING_MESSAGE);
            return;
        }

        String no_transaksi = TXTtran.getText();
        String no_kamar = TXTkamar.getText();
        String tipe_kamar = (String)CBtkamar.getSelectedItem();
        //        String tipe_kamar = jTextField1.getText();
        String jenis_kamar = (String)CBjkamar.getSelectedItem();
        long tarif = Long.parseLong(TXTtarif.getText());
        Step=1;

        Step=9;
            DefaultTableModel model = (DefaultTableModel)Tbkamar.getModel();
            model.addRow(new Object[]{
            Tbkamar.getRowCount()+1,no_transaksi,no_kamar,tipe_kamar,jenis_kamar,tarif
            });
        dataTransaksi DT = new dataTransaksi();
        DateFormat date = new SimpleDateFormat("dd-MM-yyy");

        try
        {
            Step=1;
            Date cekin= date.parse(DT.cek_in);
            Date cekout= date.parse(DT.cek_out);
            Step=2;
            int lama= (int)TimeUnit.MILLISECONDS.toDays(cekout.getTime()-cekin.getTime());
            Step=3;
            if (lama<0)
            {
                Step=4;
                JOptionPane.showMessageDialog(null, "Tanggal Salah!");
            } else
            {
                Step=5;
                int total=0;
                Step=6;
                for (int i = 0; i < Tbkamar.getRowCount(); i++)
                {

                    int Tarif=Integer.parseInt(Tbkamar.getValueAt(i, 5).toString());
                    total= total+(Tarif*lama);
                }
                Step=8;
                int totalakhir = (int) (total+DT.biaya_tambahan-DT.deposit);
                TXTtotal.setText(""+totalakhir);
            }
            
            clean();
        } catch (Exception e)
        {
            System.out.println("Error Step "+Step+" = "+e);
        }

    }//GEN-LAST:event_InputKamarActionPerformed

    private void TXTtransKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTtransKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTtransKeyTyped

    private void TXTktpKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTktpKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTktpKeyTyped

    private void TXThpKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXThpKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXThpKeyTyped

    private void TXTnameKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTnameKeyTyped
        if (Character.isDigit(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTnameKeyTyped

    private void TXTdpKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTdpKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTdpKeyTyped

    private void TXTtambahKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTtambahKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTtambahKeyTyped

    private void TXTtotalKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTtotalKeyTyped
//        if (Character.isAlphabetic(evt.getKeyChar()))
//        {
//            JOptionPane.showMessageDialog(null, "Harus angka!");
//            evt.consume();
//        }
        TXTtotal.setEnabled(false);
    }//GEN-LAST:event_TXTtotalKeyTyped

    private void TXTtranKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTtranKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTtranKeyTyped

    private void TXTkamarKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTkamarKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTkamarKeyTyped

    private void TXTtarifKeyTyped(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_TXTtarifKeyTyped
        if (Character.isAlphabetic(evt.getKeyChar()))
        {
            JOptionPane.showMessageDialog(null, "Harus angka!");
            evt.consume();
        }
    }//GEN-LAST:event_TXTtarifKeyTyped

    private void TXTtotalMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_TXTtotalMouseClicked
        
    }//GEN-LAST:event_TXTtotalMouseClicked

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try
        {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels())
            {
                if ("Nimbus".equals(info.getName()))
                {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex)
        {
            java.util.logging.Logger.getLogger(app_reservasi.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex)
        {
            java.util.logging.Logger.getLogger(app_reservasi.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex)
        {
            java.util.logging.Logger.getLogger(app_reservasi.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex)
        {
            java.util.logging.Logger.getLogger(app_reservasi.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new app_reservasi().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JComboBox<String> CBjkamar;
    private javax.swing.JComboBox<String> CBtkamar;
    private com.toedter.calendar.JDateChooser DATEin;
    private com.toedter.calendar.JDateChooser DATEout;
    private com.toedter.calendar.JDateChooser DATEreser;
    private javax.swing.JButton InputKamar;
    private javax.swing.JTextField TXTdp;
    private javax.swing.JTextField TXThp;
    private javax.swing.JTextField TXTkamar;
    private javax.swing.JTextField TXTktp;
    private javax.swing.JTextField TXTname;
    private javax.swing.JTextField TXTtambah;
    private javax.swing.JTextField TXTtarif;
    private javax.swing.JTextField TXTtotal;
    private javax.swing.JTextField TXTtran;
    private javax.swing.JTextField TXTtrans;
    private javax.swing.JTable Tbkamar;
    private javax.swing.JTable Tborder1;
    private javax.swing.JTable Tborder2;
    private javax.swing.JPanel bodyPanel;
    private javax.swing.JButton btnCancel;
    private javax.swing.JButton btnDashboard;
    private javax.swing.JToggleButton btnInput;
    private javax.swing.JButton btnKeluar;
    private javax.swing.JButton btnPrint;
    private javax.swing.JButton btnTransaksi;
    private javax.swing.JPanel formTransaksi;
    private javax.swing.JPanel homeP;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel10;
    private javax.swing.JLabel jLabel11;
    private javax.swing.JLabel jLabel12;
    private javax.swing.JLabel jLabel16;
    private javax.swing.JLabel jLabel17;
    private javax.swing.JLabel jLabel18;
    private javax.swing.JLabel jLabel19;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel20;
    private javax.swing.JLabel jLabel21;
    private javax.swing.JLabel jLabel22;
    private javax.swing.JLabel jLabel23;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JLabel jLabel9;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JScrollPane jScrollPane4;
    private javax.swing.JScrollPane jScrollPane5;
    private javax.swing.JPanel mainPanel;
    private javax.swing.JPanel sidePanel;
    private javax.swing.JPanel titlePanel;
    // End of variables declaration//GEN-END:variables

    private void clean() {
       TXTtran.setText("");
       TXTtran.requestFocus();
       TXTkamar.setText("");
       TXTtarif.setText("");
//       jTextField1.setText("");
       CBtkamar.setSelectedIndex(-0);
       CBjkamar.setSelectedIndex(-0);
    }
}
