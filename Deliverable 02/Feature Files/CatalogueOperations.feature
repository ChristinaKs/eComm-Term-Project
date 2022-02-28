Feature: SearchProductsInCatalogueOperation
  In order to search items in the catalogue
  As a customer
  I need to open the catalogue and complete some operations

  Scenario: Search for a product in catalogue
    Given I am on the HomePage
    When I click on the "catalogue" icon on the menu
    Then I see a search bar 
    When I type an item's name in the search bar
    And click "search"
    Then all instances of the item should show up
  
Feature: ViewProductDetailsOperation
  In order to search items in the catalogue
  As a customer
  I need to open the catalogue and complete some operations

  Scenario: View product details in the catalogue
    Given I am in the catalogue
    When I click any item that interests me 
    Then a page where the details of that item should be displayed
  
Feature: RateProductOperation
  In order to rate items in the catalogue
  As a customer
  I need to open the catalogue and complete some operations

  Scenario: Rate a product while being logged in
    Given I am online my order history 
    When I click on any item I have purchased
    Then I should see the window with all the details about the product as well as stars to rate
    When I rate the item using the stars icon (from 1 to 5)
    And click "review"
    Then my review should display on the website
    
  
