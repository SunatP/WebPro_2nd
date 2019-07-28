
package ictcs210.tute1;

import javax.xml.bind.JAXBElement;
import javax.xml.bind.annotation.XmlElementDecl;
import javax.xml.bind.annotation.XmlRegistry;
import javax.xml.namespace.QName;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the ictcs210.tute1 package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {

    private final static QName _CelsiusToFahrenheit_QNAME = new QName("http://tute1.ictcs210/", "CelsiusToFahrenheit");
    private final static QName _CelsiusToFahrenheitResponse_QNAME = new QName("http://tute1.ictcs210/", "CelsiusToFahrenheitResponse");
    private final static QName _Convertlength_QNAME = new QName("http://tute1.ictcs210/", "convertlength");
    private final static QName _ConvertlengthResponse_QNAME = new QName("http://tute1.ictcs210/", "convertlengthResponse");
    private final static QName _Hello_QNAME = new QName("http://tute1.ictcs210/", "hello");
    private final static QName _HelloResponse_QNAME = new QName("http://tute1.ictcs210/", "helloResponse");
    private final static QName _SquareMethod_QNAME = new QName("http://tute1.ictcs210/", "squareMethod");
    private final static QName _SquareMethodResponse_QNAME = new QName("http://tute1.ictcs210/", "squareMethodResponse");

    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: ictcs210.tute1
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link CelsiusToFahrenheit }
     * 
     */
    public CelsiusToFahrenheit createCelsiusToFahrenheit() {
        return new CelsiusToFahrenheit();
    }

    /**
     * Create an instance of {@link CelsiusToFahrenheitResponse }
     * 
     */
    public CelsiusToFahrenheitResponse createCelsiusToFahrenheitResponse() {
        return new CelsiusToFahrenheitResponse();
    }

    /**
     * Create an instance of {@link Convertlength }
     * 
     */
    public Convertlength createConvertlength() {
        return new Convertlength();
    }

    /**
     * Create an instance of {@link ConvertlengthResponse }
     * 
     */
    public ConvertlengthResponse createConvertlengthResponse() {
        return new ConvertlengthResponse();
    }

    /**
     * Create an instance of {@link Hello }
     * 
     */
    public Hello createHello() {
        return new Hello();
    }

    /**
     * Create an instance of {@link HelloResponse }
     * 
     */
    public HelloResponse createHelloResponse() {
        return new HelloResponse();
    }

    /**
     * Create an instance of {@link SquareMethod }
     * 
     */
    public SquareMethod createSquareMethod() {
        return new SquareMethod();
    }

    /**
     * Create an instance of {@link SquareMethodResponse }
     * 
     */
    public SquareMethodResponse createSquareMethodResponse() {
        return new SquareMethodResponse();
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link CelsiusToFahrenheit }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "CelsiusToFahrenheit")
    public JAXBElement<CelsiusToFahrenheit> createCelsiusToFahrenheit(CelsiusToFahrenheit value) {
        return new JAXBElement<CelsiusToFahrenheit>(_CelsiusToFahrenheit_QNAME, CelsiusToFahrenheit.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link CelsiusToFahrenheitResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "CelsiusToFahrenheitResponse")
    public JAXBElement<CelsiusToFahrenheitResponse> createCelsiusToFahrenheitResponse(CelsiusToFahrenheitResponse value) {
        return new JAXBElement<CelsiusToFahrenheitResponse>(_CelsiusToFahrenheitResponse_QNAME, CelsiusToFahrenheitResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Convertlength }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "convertlength")
    public JAXBElement<Convertlength> createConvertlength(Convertlength value) {
        return new JAXBElement<Convertlength>(_Convertlength_QNAME, Convertlength.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link ConvertlengthResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "convertlengthResponse")
    public JAXBElement<ConvertlengthResponse> createConvertlengthResponse(ConvertlengthResponse value) {
        return new JAXBElement<ConvertlengthResponse>(_ConvertlengthResponse_QNAME, ConvertlengthResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link Hello }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "hello")
    public JAXBElement<Hello> createHello(Hello value) {
        return new JAXBElement<Hello>(_Hello_QNAME, Hello.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link HelloResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "helloResponse")
    public JAXBElement<HelloResponse> createHelloResponse(HelloResponse value) {
        return new JAXBElement<HelloResponse>(_HelloResponse_QNAME, HelloResponse.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link SquareMethod }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "squareMethod")
    public JAXBElement<SquareMethod> createSquareMethod(SquareMethod value) {
        return new JAXBElement<SquareMethod>(_SquareMethod_QNAME, SquareMethod.class, null, value);
    }

    /**
     * Create an instance of {@link JAXBElement }{@code <}{@link SquareMethodResponse }{@code >}}
     * 
     */
    @XmlElementDecl(namespace = "http://tute1.ictcs210/", name = "squareMethodResponse")
    public JAXBElement<SquareMethodResponse> createSquareMethodResponse(SquareMethodResponse value) {
        return new JAXBElement<SquareMethodResponse>(_SquareMethodResponse_QNAME, SquareMethodResponse.class, null, value);
    }

}
