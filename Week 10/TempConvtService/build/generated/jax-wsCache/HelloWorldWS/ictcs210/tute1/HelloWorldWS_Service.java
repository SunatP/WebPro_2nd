
package ictcs210.tute1;

import java.net.MalformedURLException;
import java.net.URL;
import javax.xml.namespace.QName;
import javax.xml.ws.Service;
import javax.xml.ws.WebEndpoint;
import javax.xml.ws.WebServiceClient;
import javax.xml.ws.WebServiceException;
import javax.xml.ws.WebServiceFeature;


/**
 * This class was generated by the JAX-WS RI.
 * JAX-WS RI 2.2.11-b150120.1832
 * Generated source version: 2.2
 * 
 */
@WebServiceClient(name = "HelloWorldWS", targetNamespace = "http://tute1.ictcs210/", wsdlLocation = "http://localhost:8080/HelloWorldWebApplication./HelloWorldWS?wsdl")
public class HelloWorldWS_Service
    extends Service
{

    private final static URL HELLOWORLDWS_WSDL_LOCATION;
    private final static WebServiceException HELLOWORLDWS_EXCEPTION;
    private final static QName HELLOWORLDWS_QNAME = new QName("http://tute1.ictcs210/", "HelloWorldWS");

    static {
        URL url = null;
        WebServiceException e = null;
        try {
            url = new URL("http://localhost:8080/HelloWorldWebApplication./HelloWorldWS?wsdl");
        } catch (MalformedURLException ex) {
            e = new WebServiceException(ex);
        }
        HELLOWORLDWS_WSDL_LOCATION = url;
        HELLOWORLDWS_EXCEPTION = e;
    }

    public HelloWorldWS_Service() {
        super(__getWsdlLocation(), HELLOWORLDWS_QNAME);
    }

    public HelloWorldWS_Service(WebServiceFeature... features) {
        super(__getWsdlLocation(), HELLOWORLDWS_QNAME, features);
    }

    public HelloWorldWS_Service(URL wsdlLocation) {
        super(wsdlLocation, HELLOWORLDWS_QNAME);
    }

    public HelloWorldWS_Service(URL wsdlLocation, WebServiceFeature... features) {
        super(wsdlLocation, HELLOWORLDWS_QNAME, features);
    }

    public HelloWorldWS_Service(URL wsdlLocation, QName serviceName) {
        super(wsdlLocation, serviceName);
    }

    public HelloWorldWS_Service(URL wsdlLocation, QName serviceName, WebServiceFeature... features) {
        super(wsdlLocation, serviceName, features);
    }

    /**
     * 
     * @return
     *     returns HelloWorldWS
     */
    @WebEndpoint(name = "HelloWorldWSPort")
    public HelloWorldWS getHelloWorldWSPort() {
        return super.getPort(new QName("http://tute1.ictcs210/", "HelloWorldWSPort"), HelloWorldWS.class);
    }

    /**
     * 
     * @param features
     *     A list of {@link javax.xml.ws.WebServiceFeature} to configure on the proxy.  Supported features not in the <code>features</code> parameter will have their default values.
     * @return
     *     returns HelloWorldWS
     */
    @WebEndpoint(name = "HelloWorldWSPort")
    public HelloWorldWS getHelloWorldWSPort(WebServiceFeature... features) {
        return super.getPort(new QName("http://tute1.ictcs210/", "HelloWorldWSPort"), HelloWorldWS.class, features);
    }

    private static URL __getWsdlLocation() {
        if (HELLOWORLDWS_EXCEPTION!= null) {
            throw HELLOWORLDWS_EXCEPTION;
        }
        return HELLOWORLDWS_WSDL_LOCATION;
    }

}
