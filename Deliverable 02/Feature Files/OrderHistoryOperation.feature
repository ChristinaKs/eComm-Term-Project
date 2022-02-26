Feature: OrderHistoryOperation
  In order to check order history
  As a customer
  I need to open the order history page and view the order history

  Scenario: Checking Order History while being alrady logged in
    Given I am on Home page
    And logged into my customer account
    Then I open the Menu bar to navigate to the OrderHistory page 
    And click "Order History"
    Then I should see my Order History with all the purchased items
    
  Scenario: Checking Order History without being logged in and having an account
    Given I am on Login page
    Then I enter the email and password of my personal account
    And I click on "Login" button
    Then I am getting redirected to Home page
    And logged into my customer account
    Then I open the Menu bar to navigate to the OrderHistory page 
    And click "Order History"
    Then I should see my Order History with all the purchased items
    
    Scenario: Checking Order History without being logged in
    Given I am on Login page
    Then I click on the "sign up" button, since I do not have an account
    And I am redirected to the sign up page 
    Then I enter all the information needed to create an account, Name, e-mail, etc.
    And click on the "register" button after having all the fields filled out
    Then I am redirected to the login page to log in
    And I proceed all the actions from the scenario of checking the Order History without being logged in and having an account
    Then I should see my Order History with all the purchased items
