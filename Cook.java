import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Cook extends HttpServlet{
  public void doGet(HttpServletRequest request, HttpServletResponse res) throws ServletException, IOException{
    Cookie c1 = new Cookie("u1","p1");
    Cookie c2 = new Cookie("u2","p2");
    Cookie c3 = new Cookie("u3","p3");
    Cookie c4 = new Cookie("u4","p4");


    res.addCookie(c1);
    res.addCookie(c2);
    res.addCookie(c3);
    res.addCookie(c4);

    Cookie[] c = request.getCookies();
    PrintWriter pw = res.getWriter();

    String a = request.getParameter("Uname");
    String b = request.getParameter("password");

    ServletConfig config=getServletConfig();
    String haha = config.getInitParameter("user");

    int flag=0;


    pw.println("<html><body>");
    pw.println("<h2>Hello Dhamareshwar</h2>");
    if(haha.equals("password")){
      flag=1;
    }
    if(c!= null && c.length !=0){
      for(int i=0; i<c.length;i++){
        if(a.equals(c[i].getName()))
        if(b.equals(c[i].getValue()))
        flag=1;
      }
      res.setContentType("text/html");
      if(flag==1){
        pw.println("<h2>Welcome to "+a+" using cookies</h2>");
      }
      else{
        pw.println("not completed");
      }
    }
    else{
      pw.println("not completed");
    }
    pw.close();
  }
}
