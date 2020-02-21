<?php

namespace htmlentity\model\attributesets;

use htmlentity\model\attributes\eventhandler\TOnabort;
use htmlentity\model\attributes\eventhandler\TOnautocomplete;
use htmlentity\model\attributes\eventhandler\TOnautocompleteerror;
use htmlentity\model\attributes\eventhandler\TOnblur;
use htmlentity\model\attributes\eventhandler\TOncancel;
use htmlentity\model\attributes\eventhandler\TOncanplay;
use htmlentity\model\attributes\eventhandler\TOncanplaythrough;
use htmlentity\model\attributes\eventhandler\TOnchange;
use htmlentity\model\attributes\eventhandler\TOnclick;
use htmlentity\model\attributes\eventhandler\TOnclose;
use htmlentity\model\attributes\eventhandler\TOncontextmenu;
use htmlentity\model\attributes\eventhandler\TOncuechange;
use htmlentity\model\attributes\eventhandler\TOndblclick;
use htmlentity\model\attributes\eventhandler\TOndrag;
use htmlentity\model\attributes\eventhandler\TOndragend;
use htmlentity\model\attributes\eventhandler\TOndragenter;
use htmlentity\model\attributes\eventhandler\TOndragexit;
use htmlentity\model\attributes\eventhandler\TOndragleave;
use htmlentity\model\attributes\eventhandler\TOndragover;
use htmlentity\model\attributes\eventhandler\TOndragstart;
use htmlentity\model\attributes\eventhandler\TOndrop;
use htmlentity\model\attributes\eventhandler\TOndurationchange;
use htmlentity\model\attributes\eventhandler\TOnemptied;
use htmlentity\model\attributes\eventhandler\TOnended;
use htmlentity\model\attributes\eventhandler\TOnerror;
use htmlentity\model\attributes\eventhandler\TOnfocus;
use htmlentity\model\attributes\eventhandler\TOninput;
use htmlentity\model\attributes\eventhandler\TOninvalid;
use htmlentity\model\attributes\eventhandler\TOnkeydown;
use htmlentity\model\attributes\eventhandler\TOnkeypress;
use htmlentity\model\attributes\eventhandler\TOnkeyup;
use htmlentity\model\attributes\eventhandler\TOnload;
use htmlentity\model\attributes\eventhandler\TOnloadeddata;
use htmlentity\model\attributes\eventhandler\TOnloadedmetadata;
use htmlentity\model\attributes\eventhandler\TOnloadstart;
use htmlentity\model\attributes\eventhandler\TOnmousedown;
use htmlentity\model\attributes\eventhandler\TOnmouseenter;
use htmlentity\model\attributes\eventhandler\TOnmouseleave;
use htmlentity\model\attributes\eventhandler\TOnmousemove;
use htmlentity\model\attributes\eventhandler\TOnmouseout;
use htmlentity\model\attributes\eventhandler\TOnmouseover;
use htmlentity\model\attributes\eventhandler\TOnmouseup;
use htmlentity\model\attributes\eventhandler\TOnmousewheel;
use htmlentity\model\attributes\eventhandler\TOnpause;
use htmlentity\model\attributes\eventhandler\TOnplay;
use htmlentity\model\attributes\eventhandler\TOnplaying;
use htmlentity\model\attributes\eventhandler\TOnprogress;
use htmlentity\model\attributes\eventhandler\TOnratechange;
use htmlentity\model\attributes\eventhandler\TOnreset;
use htmlentity\model\attributes\eventhandler\TOnresize;
use htmlentity\model\attributes\eventhandler\TOnscroll;
use htmlentity\model\attributes\eventhandler\TOnseeked;
use htmlentity\model\attributes\eventhandler\TOnseeking;
use htmlentity\model\attributes\eventhandler\TOnselect;
use htmlentity\model\attributes\eventhandler\TOnshow;
use htmlentity\model\attributes\eventhandler\TOnsort;
use htmlentity\model\attributes\eventhandler\TOnstalled;
use htmlentity\model\attributes\eventhandler\TOnsubmit;
use htmlentity\model\attributes\eventhandler\TOnsuspend;
use htmlentity\model\attributes\eventhandler\TOntimeupdate;
use htmlentity\model\attributes\eventhandler\TOntoggle;
use htmlentity\model\attributes\eventhandler\TOnvolumechange;
use htmlentity\model\attributes\eventhandler\TOnwaiting;


trait TEventHandlerAttributes
{
    use TOnabort;
    use TOnautocomplete;
    use TOnautocompleteerror;
    use TOnblur;
    use TOncancel;
    use TOncanplay;
    use TOncanplaythrough;
    use TOnchange;
    use TOnclick;
    use TOnclose;
    use TOncontextmenu;
    use TOncuechange;
    use TOndblclick;
    use TOndrag;
    use TOndragend;
    use TOndragenter;
    use TOndragexit;
    use TOndragleave;
    use TOndragover;
    use TOndragstart;
    use TOndrop;
    use TOndurationchange;
    use TOnemptied;
    use TOnended;
    use TOnerror;
    use TOnfocus;
    use TOninput;
    use TOninvalid;
    use TOnkeydown;
    use TOnkeypress;
    use TOnkeyup;
    use TOnload;
    use TOnloadeddata;
    use TOnloadedmetadata;
    use TOnloadstart;
    use TOnmousedown;
    use TOnmouseenter;
    use TOnmouseleave;
    use TOnmousemove;
    use TOnmouseout;
    use TOnmouseover;
    use TOnmouseup;
    use TOnmousewheel;
    use TOnpause;
    use TOnplay;
    use TOnplaying;
    use TOnprogress;
    use TOnratechange;
    use TOnreset;
    use TOnresize;
    use TOnscroll;
    use TOnseeked;
    use TOnseeking;
    use TOnselect;
    use TOnshow;
    use TOnsort;
    use TOnstalled;
    use TOnsubmit;
    use TOnsuspend;
    use TOntimeupdate;
    use TOntoggle;
    use TOnvolumechange;
    use TOnwaiting;

}