<?php

namespace HEF\model\attributesets;

use HEF\model\attributes\eventhandler\TOnabort;
use HEF\model\attributes\eventhandler\TOnautocomplete;
use HEF\model\attributes\eventhandler\TOnautocompleteerror;
use HEF\model\attributes\eventhandler\TOnblur;
use HEF\model\attributes\eventhandler\TOncancel;
use HEF\model\attributes\eventhandler\TOncanplay;
use HEF\model\attributes\eventhandler\TOncanplaythrough;
use HEF\model\attributes\eventhandler\TOnchange;
use HEF\model\attributes\eventhandler\TOnclick;
use HEF\model\attributes\eventhandler\TOnclose;
use HEF\model\attributes\eventhandler\TOncontextmenu;
use HEF\model\attributes\eventhandler\TOncuechange;
use HEF\model\attributes\eventhandler\TOndblclick;
use HEF\model\attributes\eventhandler\TOndrag;
use HEF\model\attributes\eventhandler\TOndragend;
use HEF\model\attributes\eventhandler\TOndragenter;
use HEF\model\attributes\eventhandler\TOndragexit;
use HEF\model\attributes\eventhandler\TOndragleave;
use HEF\model\attributes\eventhandler\TOndragover;
use HEF\model\attributes\eventhandler\TOndragstart;
use HEF\model\attributes\eventhandler\TOndrop;
use HEF\model\attributes\eventhandler\TOndurationchange;
use HEF\model\attributes\eventhandler\TOnemptied;
use HEF\model\attributes\eventhandler\TOnended;
use HEF\model\attributes\eventhandler\TOnerror;
use HEF\model\attributes\eventhandler\TOnfocus;
use HEF\model\attributes\eventhandler\TOninput;
use HEF\model\attributes\eventhandler\TOninvalid;
use HEF\model\attributes\eventhandler\TOnkeydown;
use HEF\model\attributes\eventhandler\TOnkeypress;
use HEF\model\attributes\eventhandler\TOnkeyup;
use HEF\model\attributes\eventhandler\TOnload;
use HEF\model\attributes\eventhandler\TOnloadeddata;
use HEF\model\attributes\eventhandler\TOnloadedmetadata;
use HEF\model\attributes\eventhandler\TOnloadstart;
use HEF\model\attributes\eventhandler\TOnmousedown;
use HEF\model\attributes\eventhandler\TOnmouseenter;
use HEF\model\attributes\eventhandler\TOnmouseleave;
use HEF\model\attributes\eventhandler\TOnmousemove;
use HEF\model\attributes\eventhandler\TOnmouseout;
use HEF\model\attributes\eventhandler\TOnmouseover;
use HEF\model\attributes\eventhandler\TOnmouseup;
use HEF\model\attributes\eventhandler\TOnmousewheel;
use HEF\model\attributes\eventhandler\TOnpause;
use HEF\model\attributes\eventhandler\TOnplay;
use HEF\model\attributes\eventhandler\TOnplaying;
use HEF\model\attributes\eventhandler\TOnprogress;
use HEF\model\attributes\eventhandler\TOnratechange;
use HEF\model\attributes\eventhandler\TOnreset;
use HEF\model\attributes\eventhandler\TOnresize;
use HEF\model\attributes\eventhandler\TOnscroll;
use HEF\model\attributes\eventhandler\TOnseeked;
use HEF\model\attributes\eventhandler\TOnseeking;
use HEF\model\attributes\eventhandler\TOnselect;
use HEF\model\attributes\eventhandler\TOnshow;
use HEF\model\attributes\eventhandler\TOnsort;
use HEF\model\attributes\eventhandler\TOnstalled;
use HEF\model\attributes\eventhandler\TOnsubmit;
use HEF\model\attributes\eventhandler\TOnsuspend;
use HEF\model\attributes\eventhandler\TOntimeupdate;
use HEF\model\attributes\eventhandler\TOntoggle;
use HEF\model\attributes\eventhandler\TOnvolumechange;
use HEF\model\attributes\eventhandler\TOnwaiting;


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