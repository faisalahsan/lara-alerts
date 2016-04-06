# LaraAlerts
A laravel alerts utility that help you show `Toasts` directly in your blade template instead of Javascript files.

## Installation
Follow below steps
###### Step :- 1
- Run `composer require faisalahsan/laraalerts` in your terminal

###### Step :- 2
- **Add Service Provider** 
   Open `config/app.php` and add `FaisalAhsan\LaraAlerts\LaraAlertServiceProvider::class` to the end of `providers` array:

    ```
    'providers' => array(
        ....
        FaisalAhsan\LaraAlerts\LaraAlertServiceProvider::class,
    ),
    ```
- **Register Facade** 
  
    ```
    'aliases' => array(
        ....
        'Toast'    =>  FaisalAhsan\LaraAlerts\Facade\ToastFacade::class,
    ),
    ```

###### Step :- 3

- Include files in your layout --
    ```
        <link rel="stylesheet" href="/css/toast.css">
        <script type="text/javascript" src="/js/toast.js"></script>
    ```
## How to use

- In you `blade template`
   
   ```
   {{ Toast::info( 'Saved', 'Item saved')->run() }}
   
   ```
  
  #### Toast Types
  
  > info('heading', 'message text')
  
  ```
  First parameter shows title of the Toast
  Second parameter shows message to be display
  {{ Toast::info('Info', 'Info Toast')->run() }}
  ```
  
  > warning('heading', 'message text')
  
  ```
  First parameter shows title of the Toast
  Second parameter shows message to be display
  {{ Toast::info('Warning', 'Warning Toast')->run() }}
  ```
  
  > error('heading', 'message text')
  
  ```
  First parameter shows title of the Toast
  Second parameter shows message to be display
  {{ Toast::info('Error', 'Error Toast')->run() }}
  ```
  
  > success('heading', 'message text')
  
  ```
  First parameter shows title of the Toast
  Second parameter shows message to be display
  {{ Toast::info('Success', 'Success Toast')->run() }}
  ```
  
  #### Animation
  
  > fade() for fade transitions
  
  ```
    {{ Toast::info('Success', 'Success Toast')->fade()->run() }}
  ```  
  
  > slide() for slide up and down transitions
  
  ```
    {{ Toast::info('Success', 'Success Toast')->slide()->run() }}
  ```
  
  >  plain() simple show from and hide to corner transition 
  
  ```
    {{ Toast::info('Success', 'Success Toast')->plain()->run() }}
  ```
    
  #### Other Handy Functions
  
  > showCloseButton(true) Pass boolean (`true` or `false`) to show or hide cross button on toast, by default it is true
  
  ```
    {{ Toast::info('Success', 'Success Toast')->showCloseButton()->run() }}
  ```
  > hideAfter(3000) Specify the duration, for how long toast will be visile or pass `false` to make it sticky
  
      **Hide after 3 seconds**
        {{ Toast::info('Duration', 'This toast will be disappear after 3 seconds')->hideAfter(3000)->run() }}
      
      **Sticky**
        {{ Toast::info('Duration', 'This toast is a sticky toast.')->hideAfter(false)->run() }}
        
  > noOfToastToShow(1) how many toasts can be displayed in stack
  
  ```
    {{ Toast::info('Success', 'Success Toast')->noOfToastToShow(3)->run() }}
  ```
  
  > position() where toast will be displyed
  
  ```
    position can be one of these 
    ['bottom-left', 'bottom-right', 'top-right', 'top-left', 'bottom-center', 'top-center', 'mid-center']
    {{ Toast::info('Toast Position', 'Toast is displayed in the center position.')->position('top-center')->run() }}
    
    or simple object
    { top: - , bottom: -, left: -, right: - }
    {{ Toast::info('Toast Position', 'Toast is positioned using object.')->position("{ top: '12' , bottom: '12', left: '12', right: '12' }")->run() }}
   ```
   
  > textAlign() define text alignment e.g. left, right, center 
  
  ```
    {{ Toast::info('Text Alignment', 'Text has left alignment.')->textAlign('left')->run() }}
  ```
  
  > loader('#9EC600' ) show loader with color value
  
  ```
    {{ Toast::info('Text Alignment', 'Text has left alignment.')->loader('#9EC600')->run() }}
  color value can be Hexa value or Html color name
  ```
  
#### Thanks
Special thanks to [Kamran Ahmed](https://github.com/kamranahmedse/)

## How to Contribute
- Feel free to add some new functionality, improve some existing functionality etc and open up a pull request explaining what you did.
- Report any issues in the [issues section](https://github.com/faisalahsan/lara-alerts/issues)
- Also you can reach me directly at faisalahsan.se@gmail.com with any feedback
