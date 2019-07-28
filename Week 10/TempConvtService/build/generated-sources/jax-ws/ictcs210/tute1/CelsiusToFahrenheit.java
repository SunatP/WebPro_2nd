
package ictcs210.tute1;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlType;


/**
 * <p>Java class for CelsiusToFahrenheit complex type.
 * 
 * <p>The following schema fragment specifies the expected content contained within this class.
 * 
 * <pre>
 * &lt;complexType name="CelsiusToFahrenheit"&gt;
 *   &lt;complexContent&gt;
 *     &lt;restriction base="{http://www.w3.org/2001/XMLSchema}anyType"&gt;
 *       &lt;sequence&gt;
 *         &lt;element name="celsius" type="{http://www.w3.org/2001/XMLSchema}double"/&gt;
 *       &lt;/sequence&gt;
 *     &lt;/restriction&gt;
 *   &lt;/complexContent&gt;
 * &lt;/complexType&gt;
 * </pre>
 * 
 * 
 */
@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "CelsiusToFahrenheit", propOrder = {
    "celsius"
})
public class CelsiusToFahrenheit {

    protected double celsius;

    /**
     * Gets the value of the celsius property.
     * 
     */
    public double getCelsius() {
        return celsius;
    }

    /**
     * Sets the value of the celsius property.
     * 
     */
    public void setCelsius(double value) {
        this.celsius = value;
    }

}
