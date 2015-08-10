<?php

$installer = $this;
$installer->startSetup();

/* FOOTER LINKS BOTTOM*/
$cmsBlock = Mage::getModel('cms/block')->load('footer_company', 'identifier');
$pageContent =<<<EOF
<div class="links">
<div class="block-title"><strong><span>CUSTOMER SERVICE</span></strong>
<p id="phone">(855) 585-7500</p>
</div>
<ul>
<li><a href="{{store url=""}}#">Contact Customer Service</a></li>
<li><a href="{{store url=""}}#">Payment Options</a></li>
<li><a href="{{store url=""}}#">Frequently Asked Questions</a></li>
<li><a href="{{store url=""}}#">Return Policy</a></li>
<li><a href="{{store url=""}}#">Privacy Policy</a></li>
<li><a href="{{store url=""}}#">Terms and Conditions</a></li>
<li><a href="{{store url=""}}#">Free Ground Shipping</a></li>
<li><a href="{{store url=""}}#">Low Price Guarantee</a></li>
</ul>
</div>
<div class="links">
<div class="block-title"><strong><span>ABOUT KHAN TOOLS</span></strong></div>
<ul>
<li><a href="{{store url=""}}#">About Us</a></li>
<li><a href="{{store url=""}}#">Press</a></li>
<li><a href="{{store url=""}}#">Contact Us</a></li>
<li><a href="{{store url=""}}#">Made In USA</a></li>
<li><a href="{{store url=""}}#">What Does "Made in America" Mean?</a></li>
<li><a href="{{store url=""}}#">Are You an American Manufacturer</a></li>
<li><a href="{{store url=""}}#">A Message From Mark</a></li>
<li><a href="{{store url=""}}#">Our Animated Promo</a></li>
<li><a href="{{store url=""}}#">Glosarry</a></li>
<li><a href="{{store url=""}}#">Site Map</a></li>
</ul>
</div>
<div class="links">
<div class="block-title"><strong><span>ACCOUNT TOOLS</span></strong></div>
<ul>
<li><a href="{{store url=""}}#">Login or Create An Account</a></li>
<li><a href="{{store url=""}}#">My Account</a></li>
<li><a href="{{store url=""}}#">View Chart</a></li>
</ul>
<div class="block-title" id="associations"><strong><span>ASSOCIATIONS</span></strong></div>
<ul>
<li><div class="img-about"><img alt="" src="{{skin url='images/manufactures.png'}}" /></div></li>
<li><div class="img-about"><img alt="" src="{{skin url='images/isa.png'}}" /></div></li>
</ul>
</div>
<div class="links">
<div class="block-title social-media"><strong><span>CONNECT WITH US</span></strong></div>
<ul>
<li class="sm"><a href="#"><em class="email"></em><span>Email</span></a></li>
<li class="sm"><a href="#"><em class="facebook"></em><span>Facebook</span></a></li>
<li class="sm"><a href="#"><em class="twitter"></em><span>Twitter</span></a></li>
<li class="sm"><a href="#"><em class="linkedin"></em><span>LinkedIn</span></a></li>
<li class="sm"><a href="#"><em class="pinterest"></em><span>Pinterest</span></a></li>
<li class="sm"><a href="#"><em class="youtube"></em><span>Youtube</span></a></li>
</ul>
<div class="block-title"><strong><span>SSL SECURITY</span></strong></div>
<ul>
<li><div class="img-about"><img alt="" src="{{skin url='images/verified.png'}}" /></div></li>
</ul>
</div>
EOF;

if(!$cmsBlock->getId()){
    $cmsBlock->setTitle('Footer Company')->setIdentifier('footer_company');
}

$cmsBlock->setStoreId(0)
        ->setContent($pageContent)
        ->setIsActive(1)
        ->save();

$installer->endSetup();
?>