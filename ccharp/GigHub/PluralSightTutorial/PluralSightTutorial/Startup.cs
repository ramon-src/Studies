using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(PluralSightTutorial.Startup))]
namespace PluralSightTutorial
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
