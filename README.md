# PaCO2-Calculator
This is a simple PHP page that takes 2 variables (PvCO2 and SvO2) from a venous blood gas sample and estimates the PaCO2 using the Farkas equation.  The link to the relevant scientific paper is displayed as a reference on the page.

The page is written in simple HTML and PHP only as it is designed to be accessed directly by our Emergency Department clinical handbook app via hyperlink.
# Usage
Upload the file to a PHP-enabled webserver.  Everything required is contained within the one .php file.
# Credits
The scientific basis for using the Farkas formula is from the paper at Jörg M Agreement of pCO<sub>2</sub> in venous to arterial blood gas conversion models in undifferentiated emergency patients _IntensiveCareMedExp_ 2023 Nov 21;11(1):80.  https://icm-experimental.springeropen.com/articles/10.1186/s40635-023-00564-w

You can read about the work by Josh Farkas from his blog https://emcrit.org/pulmcrit/validation-vbg-abg/

This is based on the page structure provided by https://www.geeksforgeeks.org/php-program-to-find-simple-interest/
