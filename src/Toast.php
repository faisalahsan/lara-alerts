<?php namespace FaisalAhsan\LaraAlerts;

	use Illuminate\Support\Facades\View;
	/**
	 * Laravel LaraAlerts Package 
	 *
	 * @author   Faisal Ahsan <faisalahsan.se@gmail.com>
	 */

	class Toast {	
		
		/**
		 * Indicates message body of the toast
		 * @var string
		 */
		private $text 			= "Don't forget to star it.";  // Text that is to be shown in the toast
		
		/**
		 * Indicates heading message of the toast
		 * @var string
		 */
	            private $heading 		= 'Note';
	            
	            /**
		 * Indicates icon of the toast e.g. info, error, warning, none
		 * @var string
		 */
		private $icon 			= "info"; 

		/**
		 * Indicates transition type of toast e.g. fade, slide, plain etc
		 * @var string
		 */
	            private $showHideTransition 	= 'fade'; 

	            /**
		 * Indicates to show close icon or not
		 * @var bool
		 */
	            private $allowToastClose 	= false; 

	            /**
		 * Indicates visibility duration of taost, false indicates it is sticky toast
		 * @var integer|bool
		 */
	            private $hideAfter 		= 3000; 

	            /**
		 * Indicates false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
		 * @var integer
		 */
	            private $stack 			= 5;

	            /**
		 * Indicates position of toast, which it should be displayed
		 * @var string
		 */
	            private $position 		= 'top-right'; 
	        
		/**
		 * Indicates text alignment of the toast text
		 * @var string
		 */        
	            private $textAlign 		= 'left'; 

	            /**
		 * Indicates either to show loader or not
		 * @var bool
		 */
	            private $loader 			= false; 

	            /**
		 * Indicates color of the loader
		 * @var string
		 */
	            private $loaderBg 		= '#9EC600';

	            // private $beforeShow 		= function () {}; // will be triggered before the toast is shown
	            // private $afterShown 		= function () {}; // will be triggered after the toat has been shown
	            // private $beforeHide 		= function () {}; // will be triggered before the toast gets hidden
	            // private $afterHidden 		= function () {};  // will be triggered after the toast has been hidden

	            private $positionArray		= ['bottom-left', 'bottom-right', 'top-right', 'top-left', 'bottom-center', 'top-center', 'mid-center'];
	            private $textAlignArray		= ['left', 'right', 'center'];
	            private $htmlColorArray 		= ['aliceblue', 'antiquewhite', 'aqua', 'aquamarine', 'azure', 'beige', 'bisque', 'black', 'blanchedalmond', 'blue', 'blueviolet', 'brown', 'burlywood', 'cadetblue', 'chartreuse', 'chocolate', 'coral', 'cornflowerblue', 'cornsilk', 'crimson', 'cyan', 'darkblue', 'darkcyan', 'darkgoldenrod', 'darkgray', 'darkgreen', 'darkkhaki', 'darkmagenta', 'darkolivegreen', 'darkorange', 'darkorchid', 'darkred', 'darksalmon', 'darkseagreen', 'darkslateblue', 'darkslategray', 'darkturquoise', 'darkviolet', 'deeppink', 'deepskyblue', 'dimgray', 'dodgerblue', 'firebrick', 'floralwhite', 'forestgreen', 'fuchsia', 'gainsboro', 'ghostwhite', 'gold', 'goldenrod', 'gray', 'green', 'greenyellow', 'honeydew', 'hotpink', 'indianred', 'indigo', 'ivory', 'khaki', 'lavender', 'lavenderblush', 'lawngreen', 'lemonchiffon', 'lightblue', 'lightcoral', 'lightcyan', 'lightgoldenrodyellow', 'lightgreen', 'lightgrey', 'lightpink', 'lightsalmon', 'lightseagreen', 'lightskyblue', 'lightslategray', 'lightsteelblue', 'lightyellow', 'lime', 'limegreen', 'linen', 'magenta', 'maroon', 'mediumaquamarine', 'mediumblue', 'mediumorchid', 'mediumpurple', 'mediumseagreen', 'mediumslateblue', 'mediumspringgreen', 'mediumturquoise', 'mediumvioletred', 'midnightblue', 'mintcream', 'mistyrose', 'moccasin', 'navajowhite', 'navy', 'oldlace', 'olive', 'olivedrab', 'orange', 'orangered', 'orchid', 'palegoldenrod', 'palegreen', 'paleturquoise', 'palevioletred', 'papayawhip', 'peachpuff', 'peru', 'pink', 'plum', 'powderblue', 'purple', 'red', 'rosybrown', 'royalblue', 'saddlebrown', 'salmon', 'sandybrown', 'seagreen', 'seashell', 'sienna', 'silver', 'skyblue', 'slateblue', 'slategray', 'snow', 'springgreen', 'steelblue', 'tan', 'teal', 'thistle', 'tomato', 'turquoise', 'violet', 'wheat', 'white', 'whitesmoke', 'yellow', 'yellowgreen'];

		public function __construct() {
		}

		/**
		* Get a toast object of type INFO.
		*
		* This defines that, this is infomation.
		*
		* @param  string  $heading
		* @param  string  $text
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function info( $heading, $text ){
			$this->icon 		= 'info';
			$this->heading 		= $heading;
			$this->text 		= $text;

			return $this;
		}

		/**
		* Get a toast object of type WARNING.
		*
		* This defines that, this is a warning.
		*
		* @param  string  $heading
		* @param  string  $text
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function warning( $heading, $text ){
			$this->icon 		= 'warning';
			$this->heading 		= $heading;
			$this->text 		= $text;

			return $this;
		}

		/**
		* Get a toast object of type ERROR.
		*
		* This defines that, this is a error.
		*
		* @param  string  $heading
		* @param  string  $text
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function error( $heading, $text ){
			$this->icon 		= 'error';
			$this->heading 		= $heading;
			$this->text 		= $text;

			return $this;
		}

		/**
		* Get a toast object of type SUCCESS.
		*
		* This defines that, this is a success.
		*
		* @param  string  $heading
		* @param  string  $text
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function success( $heading, $text ){
			$this->icon 		= 'success';
			$this->heading 		= $heading;
			$this->text 		= $text;

			return $this;
		}

		/**
		* Get a animaiton type of toast.
		*
		* This defines, this is fade animation.
		*
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function fade(){
			$this->showHideTransition = 'fade';
			return $this;
		}

		/**
		* Get a animaiton type of toast.
		*
		* This defines, this is slide animation.
		*
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function slide(){
			$this->showHideTransition = 'slide';
			return $this;
		}

		/**
		* Get a animaiton type of toast.
		*
		* This defines, this is plain animation.
		*
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function plain(){
			$this->showHideTransition = 'plain';
			return $this;
		}

		/**
		*
		* Show button to close toast
		* @param  bool  $allowToClose
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function showCloseButton( $allowToClose = true ){
			if ( !is_bool( $allowToClose )) {
				$allowToClose = true;
			}
			$this->allowToastClose = $allowToClose;
			return $this;
		}

		/**
		* Get a duration of toast visibility.
		*
		* This defines duration, for how long time toast should be visible.
		* 
		* @param  integer|bool  $pageName
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function hideAfter( $hideAfter = 3000) {
			if ( is_bool( $hideAfter ) || is_numeric( $hideAfter )) {
				$hideAfter = $hideAfter;
			} else {
				$hideAfter = true;
			}
			$this->hideAfter = $hideAfter;
			return $this;
		}

		/**
		* Get number of toats.
		*
		* This defines, that how many toasts can be displayed at time.
		* @param  integer  $count
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function noOfToastToShow( $count = 1){
			if ( !is_numeric( $count )) {
				$count = 1;
			}

			if ( $count < 1) {
				$count = 1;
			}
			$this->stack = $count;
			return $this;
		}

		/**
		* Get position of toast.
		*
		* This defines, where toast will be displyed.
		* @param  string  $position
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function position( $position = 'top-right' ){
			$this->position = 'top-right';
			if( in_array( $position, $this->positionArray ) ){
				$this->position =$position;
			}

			return $this;
		}

		/**
		* Get textalignment of toast text.
		*
		* This defines, where toast text will be displyed.
		* @param  string  $textPostion
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function textAlign( $textPostion = 'left' ){
			$this->textAlign = 'left';
			if( in_array($textPostion, $this->textAlignArray)){
				$this->textAlign = $textPostion;
			}
			return $this;
		}

		/**
		* Get loader color.
		*
		* This defines, the color of the loader.
		* @param  string  $color
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		public function loader( $color = '#9EC600' ){
			$this->loaderBg =  $this->validateHtmlColor( $color );
			return $this;
		}

		/**
		* Validates hex color, adding #-sign if not found. Checks for a Color Name first to prevent error if a name was entered (optional).
		* @param  string  $color
		* @return \Faisalahsan\LaraAlerts\Toast
		*/
		private function validateHtmlColor( $color ) {
			if ( in_array(strtolower($color), $this->$htmlColorArray) ) {
				/* A color name was entered instead of a Hex Value, so just exit function */
				return $color;
			} else if ( ctype_xdigit($color) || preg_match('/^[a-fA-F0-9]{6}$/i', $color)) {
				/* Hex value entered without #, so just exit function */
				$color = '#' . $color;
			} else if (preg_match('/^#[a-fA-F0-9]{6}$/i', $color)) {
				/* Hex value entered with #, so just exit function */
				return $color;
			} else {
				/* Neither color name nor Hex value, so default value is assigned */
				$color = '#9EC600';
			}

			return $color;
		}

		/**
		* Get toast view.
		* @return \Faisalahsan\LaraAlerts\View
		*/
		public function run(){
			$params = [ 	
					'text' 			=> $this->text,
					'heading' 		=> $this->heading,
					'icon' 			=> $this->icon,
					'showHideTransition' 	=> $this->showHideTransition,
					'allowToastClose' 	=> $this->allowToastClose,
					'hideAfter' 		=> $this->hideAfter,
					'stack' 			=> $this->stack,
					'position' 		=> $this->position,
					'textAlign' 		=> $this->textAlign,
					'loader'	 		=> $this->loader,
					'loaderBg' 		=> $this->loaderBg
					// 'beforeShow' 		=> $this->beforeShow,
					// 'afterShown' 		=> $this->afterShown,
					// 'beforeHide' 		=> $this->beforeHide,
					// 'afterHidden' 		=> $this->afterHidden
				];
				
			echo view::make('LaraAlertViews::toast')->with('params', $params)->render();
		}
	}
