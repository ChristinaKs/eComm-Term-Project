Feature: SearchProductsInCatalogueOperation
  In order to search items in the catalogue
  As a customer
  I need to open the catalogue and complete some operations

  Scenario: Search for a product in catalogue
    Given I am on the HomePage
    When I click on the "catalogue" icon on the menu
    Then I see a search bar 
    And I should click on it
    Then I can search for any item in the catalogue
  
Feature: ViewProductDetailsOperation
  In order to search items in the catalogue
  As a customer
  I need to open the catalogue and complete some operations

  Scenario: View product details in the catalogue
    Given I am on a HomePage
    When I click on the "catalogue" icon on the menu
    Then I can click any item that interests me 
    And I can see the details about that specific item
  
Feature: RateProductOperation
  In order to rate items in the catalogue
  As a customer
  I need to open the catalogue and complete some operations

  Scenario: Rate a product while being logged in
    Given I am on a HomePage
    Then I click the "catalogue" icon on the Menu
    And I can click on any item in the catalogue
    Then I should see the window with all the details about the product
    And I can rate the item using the stars icon on top (from 1 to 5)
    
  Scenario: Rate a product and not having an account
    Given I am on a HomePage
    Then I click the "catalogue" icon on the Menu
    And I can click on any item in the catalogue
    Then I should see the window with all the details about the product
    And I try to rate the item using the stars icon on top (from 1 to 5)
    Then I should see the window popping up that says that I am not logged in
    And I click "login" button
    Then I should see the login page
    And I click "sign up"
    Then I should see the signing up page 
    And I enter the information required in the filds
    Then I click "register" button
    And I am redirected to the rating the item page where I can finish the process
