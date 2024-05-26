@description('Use the Resource Group Location')
param location string = resourceGroup().location

resource acr 'Microsoft.ContainerRegistry/registries@2021-09-01' existing = {
  name: 'portfolioassignment'
}

resource webApp 'Microsoft.Web/sites@2022-03-01' = {
  name: 'portfolioassignments'
  location: location
  tags: {}
  properties: {
    siteConfig: {
      acrUseManagedIdentityCreds: true
      appSettings: []
      linuxFxVersion: 'DOCKER|${acr.properties.loginServer}/portfolioassignment:68'
    }
    serverFarmId: '/subscriptions/991fd2c4-e56a-4cb1-9aeb-5fe4a5a9f8b7/resourceGroups/portfolioassignments_group/providers/Microsoft.Web/serverfarms/ASP-portfolioassignmentsgroup-8e1f'
  }
  identity: {
    type: 'SystemAssigned'
  }
}