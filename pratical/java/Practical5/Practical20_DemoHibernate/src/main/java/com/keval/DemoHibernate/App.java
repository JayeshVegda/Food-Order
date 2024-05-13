package com.keval.DemoHibernate;

import java.util.List;
import java.util.Map;

import org.hibernate.Criteria;
import org.hibernate.SQLQuery;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;
import org.hibernate.service.ServiceRegistry;
import org.hibernate.service.ServiceRegistryBuilder;

/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args )
    {
    	//Alien obj;
    	//Alien obj2;
        //System.out.println( "Hello World!" );
/*    	Alien obj = new Alien();
    	obj.setAge(2);
    	obj.setName("Shah");
    	obj.setColor("Red");
*/    	
    	//Maping Relation Ship 1 to many, many to 1, many to many, 1 to 1 
    	
    	/*Laptop laptop= new Laptop();
    	Student student = new Student();
    	
    	
    	student.setRollno(2);
    	student.setName("Nirali");
    	student.setMarks(99);
    	student.getLaptop().add(laptop);
    	
    	laptop.setLid(102);
    	laptop.setLname("SamsungPro");
    	laptop.getStudent().add(student);*/
    	// ------------end  mapping------------------------
    	
    	//----------------Hibernate--------------------
    	Configuration con = new Configuration().configure().addAnnotatedClass(Student.class);
    	ServiceRegistry sr= new ServiceRegistryBuilder().applySettings(con.getProperties()).buildServiceRegistry();
    	SessionFactory sf = con.buildSessionFactory(sr);
    	Session ses = sf.openSession();
    	ses.beginTransaction();
    	
    	/*
    	 * Native Queries...
    	 * SQLQuery q = ses.createSQLQuery("select name,marks from student where marks > 70");
    	q.setResultTransformer(Criteria.ALIAS_TO_ENTITY_MAP);
    	List student = q.list();
    	for(Object o : student){
    		Map m = (Map) o;
    		System.out.println(m.get("name")+" : "+m.get("marks"));
    	}*/
    	
    	/*
    	 * Native Queries...
    	 * 
    	 * SQLQuery q = ses.createSQLQuery("select * from student where marks > 90");
    	q.addEntity(Student.class);
    	List<Student> student = q.list();
    	for(Student s : student){
    		System.out.println(s);
    	}*/
    	
    	/*int x = 90;
    	Query q = ses.createQuery("select rollno,marks,name from Student a where a.marks > :x");
    	q.setParameter("x", x);
    	List<Object[]> students = (List<Object[]>) q.list();
    	for(Object[] student : students){
    		System.out.println(student[0]+":"+student[1]+":"+student[2]);
    	}*/
    	
    	
    	/*Query q = ses.createQuery("select rollno,marks,name from Student where rollno = 5");
    	Object[] student = (Object[]) q.uniqueResult();
    	System.out.println(student[0]+":"+student[1]+":"+student[2]);*/
    	
    	/*Query q = ses.createQuery("from Student where marks > 50");
    	List<Student> s  = q.list();
    	for(Student s1 : s){
    		System.out.println(s1);
    	}*/
    	/*
    	Random r = new Random();
    	for (int i = 1; i < 50; i++) {
			Student s = new Student();
			s.setRollno(i);
			s.setName("Name"+i);
			s.setMarks(r.nextInt(100));
			ses.save(s);
		}
    	*/
    	ses.getTransaction().commit();
    	
    	/*Session session1 = sf.openSession();
    	session1.beginTransaction();
    	Query q1 = session1.createQuery("from Alien where AGE=1");
    	q1.setCacheable(true);
    	//session1.save(obj);
    	//obj = (Alien) session1.get(Alien.class, 1);
    	obj = (Alien) q1.uniqueResult();
    	System.out.println(obj);    	
    	session1.getTransaction().commit();
    	session1.close();
    	
    	Session session2 = sf.openSession();
    	session2.beginTransaction();
    	//obj = (Alien) session2.get(Alien.class, 1);
    	Query q2 = session2.createQuery("from Alien where AGE=1");
    	q2.setCacheable(true);
    	obj2 = (Alien) q2.uniqueResult();
    	System.out.println(obj2);
    	session2.getTransaction().commit();
    	session2.close();
    	*///Session session = sf.openSession();
    	//Transaction tx = session.beginTransaction();    	
    	//session.save(obj);
    	//obj = (Alien) session.get(Alien.class, 38);    	
    	//session.save(student); Maping RelationShip 
    	//session.save(laptop);Maping RelationShip     	
    	//tx.commit();
    	//System.out.println(obj);
    }
}
