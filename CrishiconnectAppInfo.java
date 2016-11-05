package com.marvelapp.project1002789;

import org.appcelerator.titanium.ITiAppInfo;
import org.appcelerator.titanium.TiApplication;

public final class CrishiconnectAppInfo implements ITiAppInfo {
    private static final String LCAT = "AppInfo";

    public CrishiconnectAppInfo(TiApplication tiApplication) {
    }

    public String getDeployType() {
        return TiApplication.DEPLOY_TYPE_DEVELOPMENT;
    }

    public String getId() {
        return "com.marvelapp.project1002789";
    }

    public String getName() {
        return "CrishiConnect";
    }

    public String getVersion() {
        return "8.0.0";
    }

    public String getPublisher() {
        return "Marvelapp Prototyping Ltd";
    }

    public String getUrl() {
        return "http://marvelapp.com/";
    }

    public String getCopyright() {
        return "2014 by Marvelapp Prototyping Ltd";
    }

    public String getDescription() {
        return "Prototype for CrishiConnect";
    }

    public String getIcon() {
        return "appicon.png";
    }

    public boolean isAnalyticsEnabled() {
        return false;
    }

    public String getGUID() {
        return "38604ea0-5e6b-4bbf-bd0e-6ad58f24a841";
    }

    public boolean isFullscreen() {
        return true;
    }

    public boolean isNavBarHidden() {
        return true;
    }
}
