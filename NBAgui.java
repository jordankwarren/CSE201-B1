
import java.awt.Color;
import java.awt.Dimension;
import java.awt.FlowLayout;
import java.awt.Graphics;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.FocusEvent;
import java.util.ArrayList;

import javax.swing.*;

public class NBAgui extends JFrame {
  JFrame frame = new JFrame(); 
	JPanel homePanel = new JPanel(); 
  //Flag flag = new Flag();
  JLabel frontLabel = new JLabel("Click on your favorite player to see their stats"); 
  JTextField userTF = new JTextField(10);
  JTextField passTF = new JTextField(10);
  JButton logButton = new JButton("Log In"); 
  JButton signUpButton = new JButton("Sign Up"); 

  //JLabel logLabel = new JLabel("");
  
	public NBAgui() {
		this.setSize(600, 300);
		this.setTitle("Home Page ");
		this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		addComponent();
		
		this.setVisible(true);
	}
	
	
	void addComponent() {
//		flag.setPreferredSize(new Dimension(200,150));
//		p.add(flag);
		homePanel.setLayout(new FlowLayout());
		
		homePanel.add(signUpButton);
		homePanel.add(userTF);
		userTF.setText("Username");
		homePanel.add(passTF);
		passTF.setText("Password");
		homePanel.add(logButton);
		
		homePanel.add(frontLabel);
		
		LogIn log = new LogIn();
		logButton.addActionListener(log);
		
		SignUp sig = new SignUp();
		signUpButton.addActionListener(sig);
		
		this.add(homePanel);
		}
	
	public static void main(String args[]) {
		NBAgui f = new NBAgui(); 
	}
	
	class LogIn implements ActionListener{

		@Override
		public void actionPerformed(ActionEvent e) {
			boolean userCor = false; 
			boolean passCor = false; 
			ArrayList<String> accountList = new ArrayList<>(); 
			
			if(e.getActionCommand().equals("Log In")) {
				for(int k =0 ; k < 10; k++) {
					if(userTF.getText().equals(accountList.get(k))) {
						userCor = true;
					}
					
					if(passTF.getText().equals(accountList.get(k))) {
						passCor = true; 
					}
				}
				
				
				
				
				
			}
				
		}
		
	}
	class SignUp implements ActionListener{

		@Override
		public void actionPerformed(ActionEvent e) {
			if(e.getActionCommand().equals("Sign Up")) {
				
				
			}
				
		}
		
	}
//	class Flag extends JComponent{
//		public void paintComponent(Graphics g) {
//			g.setColor(Color.GREEN);
//			g.fillRect(55, 25, 30, 100);
//			g.setColor(Color.WHITE);
//			g.fillRect(85, 25, 30, 100);
//			g.setColor(Color.RED);
//			g.fillRect(115, 25, 30, 100);
//		}
//	}

}

