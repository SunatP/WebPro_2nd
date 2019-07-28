/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ictcs210.tute1;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author Acer-
 */
@WebService(serviceName = "HelloWorldWS")
public class HelloWorldWS {

    /**
     * This is a sample web service operation
     */
    @WebMethod(operationName = "hello")
    public String hello(@WebParam(name = "name") String txt) {
        return "Hello " + txt + " !";
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "squareMethod")
    public String squareMethod(@WebParam(name = "number") final int number) {
        //TODO write your implementation code here:
        int result = number*number;
        String strResult = Integer.toString(result);
        return strResult;
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "convertlength")
    public String convertlength(@WebParam(name = "cm") final float cm) {
       float inch = (float) (cm*2.54);
       String result = Float.toString(inch);
        return result;
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "CelsiusToFahrenheit")
    public String CelsiusToFahrenheit(@WebParam(name = "celsius") final double celsius) {
        double Cdegree = (double) ((celsius*1.8)+32);
        String result = Double.toString(Cdegree);
        return result;
    }

}
