resource "azurerm_service_plan" "plan" {
  name                = "guestbook-plan"
  resource_group_name = "guestbook"
  location            = "westeurope"
  os_type             = "Linux"
  sku_name            = "B1"
}

resource "azurerm_linux_web_app" "guestbook" {
  name = "guestbook"
  site_config {
    application_stack { php_version = "8.1" }
  }
}
