package edu.ajp;
import javax.ws.rs.client.Client;
import javax.ws.rs.client.ClientBuilder;
import javax.ws.rs.client.WebTarget;
import javax.ws.rs.core.MediaType;

import org.glassfish.jersey.client.ClientConfig;

public class Wsclient {
	public static void main(String args[])
	{
		ClientConfig config=new ClientConfig();		
		Client client=ClientBuilder.newClient(config);
		
		WebTarget target=client.target("http://localhost:8080/HelloWS");		
		String res=target.path("rest").path("hello").request().accept(MediaType.TEXT_PLAIN).get(String.class);
		
		System.out.println("Response from Web Service: "+res);
	}
}