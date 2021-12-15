import java.io.*;
class createalbum 
{
	public static void main (String args[]) throws IOException 
	{
		String f; 
		FileOutputStream fout;
		BufferedOutputStream bout;
		PrintStream pout;
		for(int j=1;j<10;j++) 
		{
            String word1 = Character.toString((char) ((int) (Math.random()*26) + 97));
            String word2 = Character.toString((char) ((int) (Math.random()*26) + 97));
            String word3 = Character.toString((char) ((int) (Math.random()*26) + 97));
            String word4 = Character.toString((char) ((int) (Math.random()*26) + 97));
            String word5 = Character.toString((char) ((int) (Math.random()*26) + 97));
            String sentence = word1 + word2 + word3 + word4 + word5;
			f = String.format("a%02d",j);
			fout = new FileOutputStream(f+".php");
			bout = new BufferedOutputStream(fout);
			pout = new PrintStream(bout);		
			pout.println("Album");
			pout.print("<a href="+ sentence +".jpg>x</a>");
			pout.close();
		}
	}
}