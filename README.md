# Mageplaza Google Analytics 4 - Enchanced eCommerce

Google Analytics 4 (GA4), launched in October 2020, is a free Google service widely relied upon by webmasters to evaluate the effectiveness of online marketing campaigns, track website traffic, and measure conversion rates over specific periods.

With [Mageplaza Google Analytics 4 Extension for Magento 2](https://www.mageplaza.com/magento-2-google-analytics-pro/), store owners can easily integrate GA4 into their Magento store, making it more convenient to access and leverage Google Analytics’ powerful insights. This extension simplifies setup, allowing you to track key metrics and optimize your online store’s performance effortlessly.

## Announcement

This **free version** of the Mageplaza Google Analytics 4 extension is **no longer supported** and may come with unwanted bugs and outdated features. 

But don’t worry! The new version on our live site now supports the latest GA4, Google Tag Manager (GTM), detailed reports, and will be regularly updated to keep you ahead of the game. 

Upgrade your experience with [the updated Mageplaza GA4 version](https://www.mageplaza.com/magento-2-google-analytics-pro/) now!

## Highlight features

- Compatible with Hyva Theme & API/GraphQL
- Access comprehensive reports on key store metrics
- Analyze customer activity for marketing insights and optimization
- Track Google Ads dynamic remarketing 
- Integrate Facebook Pixel for campaign conversion tracking 
- Generate a JSON file with one simple click for easy integration
- Comply with Google Consent Mode V2 for privacy regulation compliance

## Documentation

- [Installation guide](https://www.mageplaza.com/install-magento-2-extension/) 
- [Get Support](https://github.com/mageplaza/magento-2-google-analytics/issues) 
- [Contribute on Github](https://github.com/mageplaza/magento-2-google-analytics/)
- [Changelog](https://www.mageplaza.com/changelog/m2-google-analytics.txt)
- [License](https://www.mageplaza.com/LICENSE.txt)

## FAQs

#### Q: I got error: `Mageplaza_Core has been already defined`
A: Read solution: https://github.com/mageplaza/module-core/issues/3


#### Q: My site is down
A: Please follow this guide: https://www.mageplaza.com/blog/magento-site-down.html

## How to install Google Analytics Ecommerce

### Method 1: Install ready-to-paste package

- Download the latest version at [Google Analytics Enhanced Ecommerce tracking for Magento 2](https://www.mageplaza.com/magento-2-google-analytics-pro/)
-  [Installation guide](https://docs.mageplaza.com/kb/installation.html)

### Method 2: Install via composer

Run the following command in Magento 2 root folder

```
composer require mageplaza/magento-2-google-analytics
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

### Method 3: Manually install via composer

1. Access to your server via SSH
2. Create a folder (Not Magento root directory) in called: `mageplaza`, then upload the zip package to mageplaza folder.
Download the zip package at https://github.com/mageplaza/magento-2-google-analytics/archive/master.zip

3. Add the following snippet to `composer.json`

```
	{
		"repositories": [
		 {
		 "type": "artifact",
		 "url": "path/to/root/directory/mageplaza/"
		 }
		]
	}
```

4. Run composer command line

```
composer require mageplaza/magento-2-google-analytics
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```





## 100% Free Google Analytics Extension


Store owners have rights to configure easily and customize in the way you need.
<img src="https://lh6.googleusercontent.com/V5g-4BHenEHUulvHPYSFKnQV-r8K0zvSzo4vLArQqxpPRzMXT_lmiXTyWJa-cRlLHiQU6XQ8unwSO0tRjr_1CXFyz_hN9MtV1IHX6e_UJSw299so5L5tRA3FapEyo1Uvl-e0xXAH" alt="open source">


### Additional Ecommerce tracking ID

Beside the main tracking ID from Google Analytics registration, Magento supports the second tracking ID which allows getting the analytics at the same time without any delay.
<img src="https://lh5.googleusercontent.com/GAriOpvu0psH_y4SpEXQLazf51sXwN1aOzAMAxkXdj1JbxbqG5uDBhNpeloywSvV_5dqDvD2x3y3MbpaEUv5BvcQ6AVteqRPtkmrbteMGOhJQ_JJuizVDIi90uN1bjs71tNIQ-WA" alt="Additional tracking ID" />


### Enhance the accuracy of analytics page report

As administrator, you can enable Enhanced Link Attribution feature to automatically differentiating between multiple links and the same URL on a single page. Thanks to that, your report about driving the traffic becomes more credible.
<img src="https://lh5.googleusercontent.com/f5jkIe4rBESxT5kLWUq2TzIWpFzlGjqWN67i6TJhZhpYjJpeWOSZmeLmLZ_IjwPYqCWnaGA_jc0DrPRWH7iAIvvL2d-LPkHo1kPg6_o79oDRhFBcKD6PCXCmSR748YpVFoYcnAiu" alt="google anlyatics">

### Allow accessing the analytics report via IP anonymization

With Google Analytics extension, instead of real IP address, the anonymized IP can be used if you approve to guarantee user’s privacy policy.
<img src="https://lh6.googleusercontent.com/T0nqpAFNnd_5gk9QKPTvWt8m8oy3qeQ5aRytdrH90L0iH8qGCIldPIZfE6sQCMV3rFyKjYHvCWSgbyTe1ru-Z6fmOsQ4LEP217zBjHX6hlW1LjTCfnkmnKDCyb0Zdln3mZ-ZxD-1" alt="google analytics">
 
### Support trace debugging

Trace Debugging will show extra information on the console with the full tracking snippet while you are following Google Analytics report.

<img src="https://lh4.googleusercontent.com/UMktVCJwiFmbFJqBFVaz_1S-xGzzE6qn7lyH5eF9momlUPTQpjTJfFN0p5nDK_E7l-RzzEiuKMhSFCIedr5qvm_mUNgVtgg7pQxuuepyo5j6nEK5Nx1WG2eo7nr1v4rsLQhwW0Pl" alt="report">

## Other Features

- 100% FREE
- Support multi-store
- Support multi-language
- Easy to custom
- Well-done user guide
- Life-time support and update


## CHANGELOG 
### Google Analytics Enhanced Ecommerce v1.0.3
Released on  2019-03-19
Release notes: 

- Update to Google Analytics Enhanced Ecommerce

### Google Analytics Enhanced Ecommerce v1.0.3
Released on  2017-08-15
Release notes: 

- Hotfix compile issue

### Google Analytics v1.0.2
Released on  2017-06-28
Release notes: 

- Update admin configuration
- Update composer package



### Google Analytics v1.0.1
Released on  2017-04-24
Release notes: 

- Edit composer.json to require mageplazamodule-core instead of mageplazacore-m2



### Google Analytics v1.0.0
Released on  2017-04-09
Release notes: 

- Release first version




