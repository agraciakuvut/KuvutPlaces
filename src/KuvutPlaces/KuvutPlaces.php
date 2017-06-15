<?php
namespace agraciakuvut;
/**
 * Class KuvutPlaces
 *
 */
class KuvutPlaces
{
    /**
     *
     * @var string
     */
    protected $urlPlaces = 'https://places.kuvut.com/';
    /**
     *
     * @var string
     */
    protected $urlValidate = 'https://places.kuvut.com/validate';
    /**
     * Google Places Api Key
     * @var
     */
    protected $apiKey;
    protected $platform;
    protected $country;
    protected $postalCode;

    /**
     * GooglePlaces2 constructor.
     * @param string $apiKey
     */
    function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param string $platform
     */
    public function setPlatform(string $platform)
    {
        $this->platform = $platform;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function validate()
    {
        # exemple: https://places.kuvut.com/validate/?platform=test&country=ES&postal_code=08033&key=YOUR_API_KEY
        $url = $this->urlValidate . '?platform=' . $this->platform . "&country=" . $this->country . '&postal_code=' . $this->postalCode . '&key=' . $this->apiKey;
        return $this->getRequest($url);
    }

    /**
     * @param string $url
     * @return mixed
     */
    private function getRequest(string $url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return json_decode($output);
    }
}