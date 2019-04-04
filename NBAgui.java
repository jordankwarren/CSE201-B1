
import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.EventQueue;
import java.awt.FlowLayout;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.FocusEvent;
import java.util.ArrayList;

import javax.swing.*;
import javax.swing.text.DefaultCaret;

//Main Class 
public class NBAgui extends JFrame {
  JFrame frame = new JFrame(); 
  JPanel homePanel = new JPanel(); 
  JLabel frontLabel = new JLabel("Click on your favorite player to see their stats"); 
  JTextField userTF = new JTextField(10);
  JTextField passTF = new JTextField(10);
  JButton logButton = new JButton("Log In"); 
  JButton signUpButton = new JButton("Sign Up"); 
  JPanel playerPanel = new JPanel(); 
  JList playerList = new JList(); 
  JLabel border1 = new JLabel("------------------------------------------------");
  JTextArea playerTA = new JTextArea(15,15);
  JScrollPane playerScroll = new JScrollPane(playerTA,JScrollPane.VERTICAL_SCROLLBAR_ALWAYS,JScrollPane.HORIZONTAL_SCROLLBAR_ALWAYS);
  JTextArea statsTA = new JTextArea(15,15);
  JScrollPane statScroll = new JScrollPane(statsTA,JScrollPane.VERTICAL_SCROLLBAR_ALWAYS,JScrollPane.HORIZONTAL_SCROLLBAR_AS_NEEDED);
  
	public NBAgui() {
		this.setSize(485, 500);
		this.setTitle("Home Page ");
		this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		addComponent();
		
		this.setVisible(true);
	}
	
	
	void addComponent() {
		//Layout
		homePanel.setLayout(new FlowLayout());
		//Sign up button
		homePanel.add(signUpButton);
		
		//Credentials for Log in
		homePanel.add(userTF);
		userTF.setText("Username");
		homePanel.add(passTF);
		passTF.setText("Password");
		homePanel.add(logButton);
		
		//Action Listeners
		LogIn log = new LogIn();
		logButton.addActionListener(log);
		
		SignUp sig = new SignUp();
		signUpButton.addActionListener(sig);
		
		//Spacing 
		homePanel.add(border1);
		//Label for players
		homePanel.add(frontLabel);
		
		//Creates two TA that players are in and stats
		homePanel.add(playerScroll);
		homePanel.add(playerList);
		homePanel.add(statScroll);
		
		
		playerTA.setEditable(false);
		this.add(homePanel);
		
		}
	//Main that runs program
	public static void main(String args[]) {
		NBAgui f = new NBAgui(); 
	}
	
	//Log in button 
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
	//Signup button
	class SignUp implements ActionListener{

		@Override
		public void actionPerformed(ActionEvent e) {
			if(e.getActionCommand().equals("Sign Up")) {
				createSignUpFrame();
				
			}
				
		}
		
	}
	//Creates a new Frame when sign up clicked
	public static void createSignUpFrame()
    {
		//Makes this not open on start
        EventQueue.invokeLater(new Runnable()
        {
        	JPanel p = new JPanel();
        	JTextField first = new JTextField(10);
        	JTextField last = new JTextField(10);
        	JTextField password = new JTextField(10);
        	JButton doneB = new JButton("Finished"); 
        	
        	
        	JFrame frame = new JFrame("Sign Up");
            @Override
            public void run()
            {
                frame.setSize(485,500);
                
                
                addComp();
                
                
                frame.setVisible(true);    
                
            }
            void addComp() {
            	
            	p.add(first);
            	first.setText("First Name");
            	p.add(last);
             	last.setText("Last Name");
            	p.add(password);
             	password.setText("Password");
            	
             	Done db = new Done();
             	doneB.addActionListener(db);
             	p.add(doneB);
             	
             	frame.add(p);
             	
            	
            	
            }
            //Done button for sign up button closes out after clicking finished
            class Done implements ActionListener{

        		@Override
        		public void actionPerformed(ActionEvent e) {
        			String fName = "";
        			String lName = "";
        			String pass= "";
        			if(e.getActionCommand().equals("Finished")) {
        				fName = first.getText();
        				lName = last.getText();
        				pass = password.getText();
        				
        				
        				
        				frame.dispose();
        				
        			}	
        		}
        		
        	}
            
        });
    }


}

